<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Models\Mst_drunkard;
use App\Http\Requests\DrunkardRequest;

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

    public function showCreate(){
        return view('drunkards.form');
    }

    public function exeStore(DrunkardRequest $request){
        $inputs = $request->all();
        Mst_drunkard::create($inputs);

        // \session::flash('err_msg','酔っぱらいを登録しました。');
        // $request->session()->flash('err_msg','酔っ払いを登録しました。');
        return redirect(route('drunkards'));
        
    }

    public function showDetail($drunkard_id){
        // dd($drunkard_id);
        $drunkard = Mst_drunkard::where('drunkard_id',$drunkard_id)->first();

        if(is_null($drunkard)){
            // \session::flash('err_msg','データがありません。');
            return redirect(route('drunkards'));
        }

        return view(
            'drunkards.detail',
            ['drunkard' => $drunkard]
        );
    }
}
