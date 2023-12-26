<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminUserController extends Controller
{
    public function useradmin() {
        $response = Http::get( 'http://localhost:7114/api/User');

        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $user = json_decode($responseData, true);
        //   dd( $user);
      return view('admin/user',compact('user'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
      }
        return view('admin/User');
    }
    public function edituser() {
        return view('admin/edituser');
    }


}
