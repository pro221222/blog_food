<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminBlogController extends Controller
{
    public function waitlist() {
        session_start();

        $response = Http::get('http://localhost:7114/api/Post');

        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $waitlist = json_decode($responseData, true);
        return view('admin/waitlist',compact('waitlist'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
      }


    }
    public function postwaitlist($id) {
        session_start();
        $responses = Http::put( 'http://localhost:7114/api/Post?PostID='.$id);

        // dd( $responses);
        $response = Http::get('http://localhost:7114/api/Post/PostTrue');

        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $array = json_decode($responseData, true);

      return view('admin/blog',compact('array'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
      }
    }
    public function detail($id) {
        session_start();
        $response = Http::get('http://localhost:7114/api/Post/' . $id);
        // http://localhost:7114/api/Post/99a481d9-06be-4865-aa29-8df36fa4bfb7
        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $array = json_decode($responseData, true);
// dd( $array);
           return view('admin/detail',compact('array'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
    //   }
        // return view('client/recipe_detail');

    }
}
    public function editblog() {
        session_start();
        return view('admin/editblog');

    }
    public function deleteblog($id) {
        session_start();
        $response = Http::delete('http://localhost:7114/api/Post?PostID='.$id);

        $response = Http::get('http://localhost:7114/api/Post/PostTrue');

        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $array = json_decode($responseData, true);

      return view('admin/blog',compact('array'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
      }

    }
}
