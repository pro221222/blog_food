<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function useradmin() {
        return view('admin/User');
    }
    public function edituser() {
        return view('admin/edituser');
    }


}
