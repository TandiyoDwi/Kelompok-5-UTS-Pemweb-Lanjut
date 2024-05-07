<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    //
    function index(){
        return view('index');
    }
    function create(){
        return view('create');
    }
    function store(){
        
    }
}
