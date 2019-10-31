<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminDashboard(Request $request){
        if(!$request->user()->hasRole('admin')){
            return view('admin.test');
        }
        return view('admin.admin');
    }
}
