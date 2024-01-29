<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Facades\Agent;

class ProductPageController extends Controller
{
    public function productsPage() {
        $agent = new Agent();
        $token = "3|n4cDcB5uGDRDkCKVXR3mM72zyuNGKfaloxY2Lm7ue80657bc";
        $data = null;

        // $headers = [
        //     "Authorization" => "Bearer" .$token,
        //     "Accept" => "application/json"
        // ];
        // $response = Http::accept('application/json')->withToken("Bearer ".$token)->timeout(30)->get("http://127.0.0.1:8000/api/products/");


        // if ($response->getStatusCode() == 200) {
        //     $data = json_decode($response->getBody(), true);
        // } else {
        //     $data = [];
        // }
            // $url = "http://127.0.0.1:8000/api/products/";

            // $response = Http::get($url, [
            //     "headers"=> $headers,
            // ]);
            // $responseBody = $response->json();

        return view("productsPage", compact("agent", "data"));
    }
}
