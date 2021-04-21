<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function About(){
    	return view('about');
    }
}