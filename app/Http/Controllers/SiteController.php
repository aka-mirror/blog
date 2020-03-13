<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $fullname = "Ronnarit Guaysa-ard";
        $website = "codingthailan.com";

        return view('about',[
    'fullname' => $fullname,
    'website' => $website
        ]);
    }
}
