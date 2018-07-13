<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordlController extends Controller
{
    public function getIndex() {
        echo 'HelloWorld';
    }    
}
