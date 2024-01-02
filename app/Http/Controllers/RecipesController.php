<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipesController extends Controller
{
    public function recipes() {
        session_start();

  // dd(  $responseData);
  $response = Http::get('http://localhost:7114/api/Post/PostTrue');
  if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
    $responseData = $response->getBody()->getContents();
    $array = json_decode($responseData, true);
 return view('client/recipes',compact('array'));

} else {
     // Xử lý lỗi nếu request không thành công
    return response()->json(['error' => 'Request không thành công'], $response->getStatusCode());
}



}
}
