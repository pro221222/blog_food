<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function waitlist() {
        return view('admin/waitlist');

    }
    public function editblog() {
        return view('admin/editblog');

    }
}
