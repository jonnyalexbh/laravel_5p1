<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersAngularController extends Controller
{
  /**
  * index
  *
  */
  public function index()
  {
    return view('users-angularjs.index');
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
    //
  }

  /**
  * show
  *
  */
  public function show($id)
  {
    //
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
    //
  }

  /**
  * destroy
  *
  */
  public function destroy($id)
  {
    //
  }
}
