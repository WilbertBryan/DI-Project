<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Kritiksaran;
class KritikController extends Controller
{
    public function PostKritik(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        Kritiksaran::create([
            'name' => $request->name,
            'kritiksaran' => $request->message,
        ]);
        return redirect()->back()->with('success', 'Message has added successfully!');
    }
}
