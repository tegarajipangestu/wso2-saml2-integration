<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class PagesController extends Controller
{
    public function index(Request $request) {
    	$user = Auth::user();
    	return view('index',['user' => $user]);
    	// return redirect('/example');
    }

    public function userManagement() {

    }
}
