<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class PagesController extends Controller
{
    public function index(Request $request) {
    	// return view('index');
    	return redirect('/example');
    }

    public function userManagement() {

    }
}
