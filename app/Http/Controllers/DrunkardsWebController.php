<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrunkardsWebController extends Controller
{
    //
    public function showList(){
        return view('drunkards.list');
    }
}
