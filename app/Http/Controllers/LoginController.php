<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

public function checklogin() {
    $response = Http::post('http://localhost:7114/api/Authentication/Login', [
        'username' => request('username'), // Use request() instead of $_REQUEST

        'password' => request('password'),
    ]);

    // Check if the request was successful (status code 2xx)
    if ($response->successful()) {

        // Process the response data if needed
        $responseData = $response->json(); // Assuming the response is in JSON format

        session_start();
        $_SESSION['token'] = array(
            'accessToken' => $responseData['accessToken'],
            'refreshToken' => $responseData['refreshToken'],
            'username' => $responseData['refreshToken']

        );
        // try {
        //     // Decode the token to get user information
        //     $user = JWTAuth::setToken( $_SESSION['token']['accessToken'])->toUser();
        //     dd($user);
        //     // You can use $user to get user information
        //     $userId = $user->id;
        //     $username = $user->username;

        //     // Or use Auth facade
        //     $userIdFromAuth = Auth::id();
        //     $usernameFromAuth = Auth::user()->username;

        //     // Display user information
        //     echo "User ID: $userId, Username: $username\n";
        //     echo "User ID from Auth facade: $userIdFromAuth, Username from Auth facade: $usernameFromAuth\n";
        // } catch (TokenExpiredException $e) {
        //     // Token has expired
        //     echo 'Token has expired';
        // } catch (TokenInvalidException $e) {
        //     // Token is invalid
        //     echo 'Token is invalid';
        // } catch (JWTException $e) {
        //     // Other errors occurred while decoding the token
        //     echo 'An error occurred while decoding token';
        // }
        $user = JWTAuth::setToken($_SESSION['token']['accessToken']); //<-- set token and check
        if ( $claim = JWTAuth::getPayload()) {
            $name = $claim->get('http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name');
            $nameIdentifier = $claim->get('http://schemas.xmlsoap.org/ws/2005/05/identity/claims/nameidentifier');
            $username = $claim->get('sub');
            $role = $claim->get('http://schemas.microsoft.com/ws/2008/06/identity/claims/role');

            $names = json_encode ($name);
            $nameIdentifiers = json_encode ($nameIdentifier);
            $_SESSION['userprofide'] = array(
                'names' => $names,
                'nameIdentifiers' => $nameIdentifiers,
                'usernames' =>  $username,
                'role' =>  $role,
            );


        }


        $response = Http::get('http://localhost:7114/api/Post');

        // Kiểm tra nếu request thành công (HTTP status code 2xx)
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
          $responseData = $response->getBody()->getContents();
          $array = json_decode($responseData, true);
          if ( $_SESSION['userprofide']['role'] == 'Admin') {

                return view('admin/blog',compact('array'));
             }
                return view('client/home',compact('array'));

        //    return view('client/home',compact('array'));
      } else {
          // Xử lý lỗi nếu request không thành công
          return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
      }
        // Bạn có thể sử dụng $user để lấy thông tin người dùng

        // dd( $userId);
        // Redirect or do something based on the response
        // return view('client/home');

    } else {
        // Handle unsuccessful response (e.g., display an error message)
        return view('login');

    }

}
    public function register() {
        if (preg_match('/^[0-9]{10}$/', Request('phoneNumber')) && preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/', Request('password'))) {
            // dd(Request('phoneNumber'));
            if (request('password') == Request('confirmPassword')) {
            $response = Http::post('http://localhost:7114/api/Authentication/Register', [
                    'userName' => Request('userName'),
                    'displayName' => Request('DisplayName'),
                    'phoneNumber' =>Request('phoneNumber'),
                    'email' =>Request('email'),
                    'password' =>Request('password'),
                    'confirmPassword' =>Request('confirmPassword'),
                ]);
                return view('login');
            }else{
                dd('ssfsfs');
            }

        }else{
            dd('dddddd');

        }


    }
    public function detry() {

        Auth::logout();
        return redirect('login');
    }
}
