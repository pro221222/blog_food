<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function profile($id) {
        session_start();
        $response = Http::get('http://localhost:7114/api/User/user?User=' . trim($id, '"'));
        // http://localhost:7114/api/Post/99a481d9-06be-4865-aa29-8df36fa4bfb7
        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $user = json_decode($responseData, true);
// dd( $user);
           return view('client/profile',compact('user'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
    //   }
        // return view('client/recipe_detail');

    }

    //   'http://localhost:7114/api/Post/PostUser?UserId=7d0dbf76-3d1b-4090-b57e-85f16f86d56a7d0dbf76-3d1b-4090-b57e-85f16f86d56a'

    }
    // public function posst($id) {
    //     $response = Http::get('http://localhost:7114/api/Post/PostUser?UserId=' . trim($id, '"'));
    //         // http://localhost:7114/api/Post/99a481d9-06be-4865-aa29-8df36fa4bfb7
    //         // Kiểm tra nếu request thành công (HTTP status code 2xx)
    //         if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
    //         $responseData = $response->getBody()->getContents();
    //         $array = json_decode($responseData, true);
    //     dd( $array);
    //         return view('client/profile',compact('array'));
    //     } else {
    //         // Xử lý lỗi nếu request không thành công
    //         return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
    //     //   }
    //         // return view('client/recipe_detail');

    //     }
    // }
}
