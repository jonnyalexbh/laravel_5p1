<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersAngularController extends Controller
{
  /**
  * home
  *
  */
  public function home()
  {
    return view('users-angularjs.index');
  }
  /**
  * index
  *
  */
  public function index()
  {
    return User::all();
  }
  /**
  * users
  *
  */

  public function users(){
    return User::all();
  }

  /**
  * create
  *
  */
  public function create()
  {
    //
  }

  /**
  * store
  *
  */
  public function store(Request $request)
  {
    return User::create($request->all());
  }

  /**
  * show
  *
  */
  public function show($id)
  {
    return User::find($id);
  }

  /**
  * edit
  *
  */
  public function edit($id)
  {
    //
  }

  /**
  * update
  *
  */
  public function update(Request $request, $id)
  {
    $user = User::findOrFail($request->input("id"));

    $user->fill($request->all());
    $user->save();

    return $user;
  }

  /**
  * destroy
  *
  */
  public function destroy($id)
  {
    if(User::find($id)->delete()){
      return ["error" => false];
    }
    else{
      return ["error" => true, "message" => "No fue posible eliminar el registro"];
    }
  }
}
