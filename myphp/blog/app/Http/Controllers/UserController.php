<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show($name){
        echo "Hello $name from UserController";
    }
}
