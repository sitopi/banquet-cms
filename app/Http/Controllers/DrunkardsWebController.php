<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Mst_drunkard;

class DrunkardsWebController extends Controller
{
    //
    public function showList(){
        $drunkards = Mst_drunkard::all();

        // dd($drunkards);
        return view(
            'drunkards.list',
            ['drunkards' => $drunkards]
        );
    }
}
