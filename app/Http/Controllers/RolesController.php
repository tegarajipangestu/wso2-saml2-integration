<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;

class RolesController extends Controller
{
    public function index() {
        $roles = Role::all();
        return view ('roles.index', ['roles' => $roles]);
    }

    public function create() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }

    public function showAllController() {
    	
    }

}
