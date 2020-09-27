<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin-master');
    }

    public function getUsers()
    {
        return User::all();
    }
}
