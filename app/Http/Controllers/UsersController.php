<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;

class UsersController extends Controller {

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {
    $users = User::paginate(2);
    return view('user.index', compact('users'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create() {
    return view('user.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(UserCreateRequest $request) {

    $data = [
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => $request['password'],
    ];

    User::create($data);
    Session::flash('message','Usuario creado exitosamente');
    return redirect('users');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id) {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id) {
    $user = User::find($id);
    return view('user.edit', ['user' => $user]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(UserEditRequest $request, $id) {
    $user = User::find($id);
    $user->fill($request->all());
    $user->save();
    Session::flash('message','Usuario Actualizado Correctamente');
    return redirect('users');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id) {
    User::destroy($id);
    Session::flash('message','Usuario Eliminado Correctamente');
    return redirect('users');
  }

}
