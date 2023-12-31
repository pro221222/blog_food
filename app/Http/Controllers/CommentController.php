<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function GetComment($id) {


        $url = "http://localhost:7114/api/Comment?PostID={$id}";

            //    'http://localhost:7114/api/Comment?PostID=b1ca04ff-e2d1-4c54-8a91-70c250ebda33' \


        $response = Http::get($url);
        $responseData = $response->json();
        if($response->getStatusCode() >= 200 && $response->getStatusCode() < 300){

            return json_decode($response);
        };


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
