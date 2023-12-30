<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LikeFollowController extends Controller
{
    public function Getlike($id) {
        session_start();
        $userID =   trim($_SESSION['userprofide']['nameIdentifiers'], '"');
        $url = "http://localhost:7114/api/FollowerLike?UserLike={$userID}&PostID={$id}";

        //  'http://localhost:7114/api/FollowerLike?UserLike=%E1%BB%A7awer&PostID=%E1%BA%A5df' \


     $response = Http::get($url);
     $responseData = $response->json();


        // Lấy dữ liệu từ response
        if($response->getStatusCode() >= 200 && $response->getStatusCode() < 300){
        return response()->json([
            "data"=> $responseData,
        ]);
    }



    }


    public function GetCountLike($id) {
        session_start();

        $url = "http://localhost:7114/api/Post/CoutLike?PostID={$id}";

        //   'http://localhost:7114/api/Post/CoutLike?PostID=b1ca04ff-e2d1-4c54-8a91-70c250ebda33' \


     $response = Http::get($url);
     $responseData = $response->json();


        // Lấy dữ liệu từ response
        if($response->getStatusCode() >= 200 && $response->getStatusCode() < 300){

        return response()->json([
            "cout"=> $responseData,200
        ]);
    }



    }


    public function like($id) {
        session_start();
        $userID =   trim($_SESSION['userprofide']['nameIdentifiers'], '"');
        $url = "http://localhost:7114/api/FollowerLike/like?UserLike={$userID}&PostID={$id}";

        //   'http://localhost:7114/api/FollowerLike/like?UserLike=dfasdf&PostID=adfsasdf' \


     $response = Http::post($url);


     if($response->getStatusCode() >= 200 && $response->getStatusCode() < 300){
            return json_decode($response->json("khong co gi"), true);
        }



    }



    public function follow() {
        echo("gdg");

    }
    public function unlike($id) {
        session_start();

        $userID =   trim($_SESSION['userprofide']['nameIdentifiers'], '"');
        $url = "http://localhost:7114/api/FollowerLike/unlike?UserLike={$userID}&PostID={$id}";

        //    'http://localhost:7114/api/FollowerLike/unlike?Follower=fsdfs&Followin=sdfsdf' \ \


     $response = Http::delete($url);


        if($response->getStatusCode() >= 200 && $response->getStatusCode() < 300){
            return json_decode($response->json("khong co gi"), true);
        }

    }
    public function unfollow() {
        echo("gdgdhhhhh");

    }
}
