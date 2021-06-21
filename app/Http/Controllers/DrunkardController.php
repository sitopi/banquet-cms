<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Mst_drunkard;

class DrunkardController extends Controller
{
    //
    public function get(Request $request){
        $drunkards = Mst_drunkard::get();

        // Unity側のJsonUtilityでrootが配列だと受け取れないので1クッション挟む
        $responseJson = [
            'mst_drunkards' => $drunkards
        ];
        
        // $responseJson = "{\"drunkards\":" + $responseJson + "}";
        return response()->json($responseJson);
    }
}
