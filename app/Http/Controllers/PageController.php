<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class PageController extends Controller
{
    public function homePage(){
        $agent = new Agent();
        return view("homePage", compact('agent'));
    }
    public function menuPage(){
        $agent = new Agent();
        return view("menuPage", compact('agent'));
    }
    public function productsPage() {
        $agent = new Agent();
        return view('productsPage', compact('agent'));
    }
}
