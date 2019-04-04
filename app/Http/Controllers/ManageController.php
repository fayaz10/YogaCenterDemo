<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function dashboard()
    {
    	return view('manageFile.dashboard');
    }

     public function index()
    {
    	return redirect()->route('manage.dashboard');
    }
}
