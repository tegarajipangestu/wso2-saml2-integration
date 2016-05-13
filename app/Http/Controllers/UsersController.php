<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        return view ('users.index', ['user' => $user]);            
    }

    public function create() {
        
    }

    public function show(Request $request, $name) {
        $user = Auth::user();
        if ($name==$user->name) {
            return view('users.show',['user' => $user]);
        }
        else {
            return redirect ('/');
        }
    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }

    public function assignRole() {

    }

}
