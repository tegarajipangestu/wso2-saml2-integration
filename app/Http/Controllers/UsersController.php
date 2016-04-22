<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        return view ('users.index', ['users' => $users]);
    }

    public function create() {
        
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
