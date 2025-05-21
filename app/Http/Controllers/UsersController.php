<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {
    $users = User::all()->toArray(); // ดึงข้อมูลทั้งหมดจากตาราง users
    // dd($users);
    return view('admin.addUsers', compact('users'));
  }
}
