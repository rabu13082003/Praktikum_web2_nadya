<?php

namespace App\Http\Controllers;
use App\Models\Posts; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ($angka1,$angka2)
    {
        $hasil=$angka1+$angka2;
        return view('home', compact('hasil'));
    }

    public function welcome ()
    {
        $posts=Posts::latest()->get();
        return view('welcome', compact('posts'));
    }
}
