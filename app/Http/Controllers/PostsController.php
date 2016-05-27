<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
  public function index() {
      return view ('PostsController.index');
  }

  public function create() {
    return view ('PostsController.create');
  }

  public function store() {
    return view ('PostsController.store');
  }

  public function show() {
    return view ('PostsController.show');
  }

  public function edit() {
    return view ('PostsController.edit');
  }

  public function update() {
    return view ('PostsController.update');
  }

  public function destroy() {
    return view ('PostsController.destroy');
  }

}
