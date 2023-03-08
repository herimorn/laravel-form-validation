<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //hanndling the logics here
    public function index(){
        $blogs=[[
            "title"=>"herimorn blogs",
            "body"=>"this is the body to see",
            "status"=>0
        ],
        [
            "title"=>"jackson blog is wionderfull",
            "body"=>"this is the amaizing part",
            "status"=>1
        ],
        [
            "title"=>"we are the good one",
            "body"=>"this is the body to see yoo yoo",
            "status"=>0
        ],

    ];
    return view("home",compact("blogs"));
        
    }
   
}
