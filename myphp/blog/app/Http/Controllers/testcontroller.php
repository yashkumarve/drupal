<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class testcontroller extends Controller
{

function show($name){
    echo "$name is called";
}

function loadview($user){
    return view('user',['name'=>$user]);
}

}
?>