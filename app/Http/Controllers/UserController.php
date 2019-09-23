<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller {

  public function index() {
    $users = User::all();
    return response()->json($users);
  }

  public function create(Request $request) {
    $user = new User;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = $request->password;

    $user->save();
    return response()->json($user);
  }

  public function show($id) {
    $user = User::find($id);
    return response()->json($user);
  }

  public function update(Request $request, $id) {
    $user= User::find($id);

    $user->username = $request->input('username');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return response()->json($user);
  }

  public function destroy($id) {
    $user = User::find($id);
    $user->delete();
    return response()->json('product removed successfully');
  }
}
