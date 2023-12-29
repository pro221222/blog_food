<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home() {
        session_start();
        $response = Http::get('http://localhost:7114/api/Post/PostTrue');

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
    public function postblog() {
        session_start();
        $response = Http::get( 'http://localhost:7114/api/Categories');

        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $category = json_decode($responseData, true);
          return view('client/postblog',compact('category'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
      }

    }
    public function post() {
        session_start();
            $originalName = request('thumbnail')->getClientOriginalName();
            $thumbnail = request()->file('thumbnail');
            $fileImage = time() . '.' . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('image_singer', $fileImage, 'public');
            $imageSinger = 'storage/image_singer/' . $fileImage;
            if (isset($_SESSION['userprofide']['usernames'])) {
                $token = $_SESSION['token']['accessToken'];

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $token,
                ])->post('http://localhost:7114/api/Post?UserID=' . trim($_SESSION['userprofide']['nameIdentifiers'], '"'), [
                    'title' => [
                        'postID' => 'string', // Replace with actual post ID
                        'like' => 0,
                        'nameWrite' => 'string', // Replace with actual nameWrite
                        'date' => 'string', // Replace with actual date
                        'nameFood' => request('nameFood'),
                        'rating' => 0,
                        'isFavorite' => true,
                        'thumbnail' =>  $imageSinger,
                        'description' => request('description'),
                    ],
                    'category' => request('category'),
                    'content' => request('textarea'),
                    'cookingTime' => request('cookingTime'),
                    'ingredients' => [request('ingredients')],
                ]);


                if ($response->successful()) {
                    // Xử lý kết quả
                    // $responseData = $response->json();
                      // dd(  $responseData);
                      $response = Http::get('http://localhost:7114/api/Post/PostTrue');
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

    }


}

