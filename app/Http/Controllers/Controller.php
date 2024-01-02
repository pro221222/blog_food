<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function search() {



    // $response = Http::get('http://localhost:7114/api/Post/PostTrue');

    // // Check if the request was successful (HTTP status code 2xx)
    // if ($response->successful()) {
    //     $responseData = $response->json(); // Automatically decodes JSON response

    //     // Assuming $searchTerm contains the search term from user input
    //     $filteredArray = array_filter($responseData, function ($item) use ($searchTerm) {
    //         // Customize this condition based on your data structure and search criteria
    //         return stripos($item['fieldName'], $searchTerm) !== false;
    //     });

    //     return view('client.home', compact('filteredArray'));
    // } else {
    //     // Handle error if the request was not successful
    //     return response()->json(['error' => 'Request không thành công'], $response->status());
    // }



    }
}
