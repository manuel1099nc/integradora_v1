<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function _invoke(){
        return "Bievenidos a la página principal";
    }
}
