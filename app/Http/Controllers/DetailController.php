<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailController extends Controller
{
    public function recipe_detail($id) {
        session_start();
        $response = Http::get('http://localhost:7114/api/Post/' . $id);
        // http://localhost:7114/api/Post/99a481d9-06be-4865-aa29-8df36fa4bfb7
        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $array = json_decode($responseData, true);
// dd( $array);
           return view('client/recipe_detail',compact('array'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
    //   }
        // return view('client/recipe_detail');

    }
}
 }
