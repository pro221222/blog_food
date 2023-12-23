<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return view('admin/blog');

    }
    public function image() {
        return view('admin/image');

    }

}
