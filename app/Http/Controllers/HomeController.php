<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function Home(){
    	return view('home');
    }
}