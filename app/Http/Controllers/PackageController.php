<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class PackageController extends Controller
{
    public function Package(){
    	return view('package');
    }
}