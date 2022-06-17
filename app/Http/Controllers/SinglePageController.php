<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function getSinglePage(){
        return view('welcome');
    }
}
