<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HeroeController extends Controller
{
    public function index()
    {   
        $publicKey = env('API_PUBLIC_KEY');
        $privateKey = env('API_PRIVATE_KEY');
        $time = date('H');
        $hash = md5($time.$privateKey.$publicKey);
        $hero = Http::get("http://gateway.marvel.com/v1/public/characters?ts=$time&apikey=$publicKey&hash=$hash");
        $extension = '.jpg';
        return view("heroes", [
            "hero" => $hero,
            "extension" => $extension
        ]);
    }
}
