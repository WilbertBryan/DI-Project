<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function loadAllInfo(Request $request){
        $newinfo = Info::orderBy('created_at', 'desc')->take(5)->get();
        $sort = $request->get('sort', 'latest');
        $category = $request->get('category', 'all');


    if ($sort == 'oldest') {
        $infos = Info::orderBy('created_at', 'asc')->paginate();
    } else {
        $infos = Info::orderBy('created_at', 'desc')->paginate();
    }




    if ($category == 'all') {
        $infos = Info::orderBy('created_at', $sort == 'oldest' ? 'asc' : 'desc')->paginate();
    } else {
        $infos = Info::where('category', $category)
            ->orderBy('created_at', $sort == 'oldest' ? 'asc' : 'desc')->paginate();
    }
        // $infos = Info::orderBy('created_at', 'desc')->paginate();

        return  view('info',  compact('infos','newinfo'));
       
    }

    public function infoDetails($id)
    {
        $info = Info::where('title', $id)->first();

        if (!$info) {
            abort(404);
        }

        return view('info2', compact('info'));
    }
}
