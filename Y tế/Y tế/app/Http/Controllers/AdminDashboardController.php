<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index(){
        return redirect()->route('list.product');
    }
    public function logout(){
        Auth::logout();
    }
}
