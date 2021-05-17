<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comicsController extends Controller
{
    
    public function comicsFun() {

        $name = 'sono la prima variabile';

        return view('pages.home', compact('name'));
    }
} 
