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
        return redirect(route('drunkards'));
    }

    public function showDetail($id){
        $drunkard = Mst_drunkard::where('id',$id)->first();

        if(is_null($drunkard)){
            // \session::flash('err_msg','データがありません。');
            return redirect(route('drunkards'));
        }

        return view(
            'drunkards.detail',
            ['drunkard' => $drunkard]
        );
    }

    public function showEdit($id){
        $drunkard = Mst_drunkard::where('id',$id)->first();

        if(is_null($drunkard)){
            // \session::flash('err_msg','データがありません。');
            return redirect(route('drunkards'));
        }

        return view(
            'drunkards.edit',
            ['drunkard' => $drunkard]
        );
    }

    public function exeUpdate(DrunkardRequest $request){
        $inputs = $request->all();

        \DB::beginTransaction();
        try{
            // $drunkard = Mst_drunkard::find($inputs['id']);
            // dd($inputs);
            $id = $inputs['id'];
            $drunkard = Mst_drunkard::where('id',$id)->first();
            // dd($inputs);
            $drunkard->fill([
                'name' => $inputs['name'],
                'level' => (int)$inputs['level'],
                'hp' => (int)$inputs['hp'],
                'attack' => (int)$inputs['attack'],
                'move_speed' => (int)$inputs['move_speed'],
                'description' => $inputs['description']
            ]);
            // dd($drunkard);
            $drunkard->save();
            
            // dd($inputs);
            \DB::commit();
        } catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }
        return redirect(route('drunkards'));
    }
}
