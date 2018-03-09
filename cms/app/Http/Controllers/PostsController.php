<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
 
    public function show(){;
        return view('home');
    }

    public function showHighFlyer(){
        return view('pages');
    }

    public function showProject(){
        return view('project');
    }

}
