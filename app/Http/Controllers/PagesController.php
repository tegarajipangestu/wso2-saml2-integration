<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(Request $request) {
    	return view('index');
    }

    public function userManagement() {

    }
}
