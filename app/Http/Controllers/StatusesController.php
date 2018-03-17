<?php

namespace App\Http\Controllers;

use App\Policies\StatusPolicy;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Status;

class StatusesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Request $request){
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);

        Auth::user()->statuses()->create([
            'content' => $request['content']
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $status = Status::find($id);
        $this->authorize('destroy', $status);

        $status->delete();
        session()->flash('success','成功删除！');
        return redirect()->back();
    }
}
