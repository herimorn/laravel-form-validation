<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{ 
    public function index(){

        $yes="haloooo";
        return view("about",compact("yes"));

    }
    
}
