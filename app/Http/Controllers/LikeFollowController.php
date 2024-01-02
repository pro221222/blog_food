<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeFollowController extends Controller
{
    public function like() {
        echo("fjgfsudf");
    }
    public function follow() {
        echo("gdg");

    }
    public function unlike() {
        session_start();
         $token = $_SESSION['token']['accessToken'];
       return response()->json([
         'token' => $token
       ],200);
    }
    public function unfollow() {
        echo("gdgdhhhhh");

    }
}
