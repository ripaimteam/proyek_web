<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function Welcome(){
    	return view('welcome');
    }
}