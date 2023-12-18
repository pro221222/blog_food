<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home() {
        $response = Http::get('http://localhost:7114/api/Post');

          // Kiểm tra nếu request thành công (HTTP status code 2xx)
          if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
            $responseData = $response->getBody()->getContents();
            $array = json_decode($responseData, true);
             return view('client/home',compact('array'));
        } else {
            // Xử lý lỗi nếu request không thành công
            return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
        }
        

    }
}

