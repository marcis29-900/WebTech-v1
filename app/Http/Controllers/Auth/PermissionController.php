<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Auth;
Use App\User;

class PermissionController extends Controller
{
    public function index() {
      $id = Auth::id();
      $users = User::where('id', '!=', $id)->get(); //atlasa visus iznemot konkreto
      return view('auth.permissions')->with('users', $users);
    }
}
