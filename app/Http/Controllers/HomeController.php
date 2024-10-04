<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Apresiasi;
Use App\Models\Info;
Use App\Models\Konten;
class HomeController extends Controller
{
    public function GetHome()
{
    $apresiasi = Apresiasi::all();
    $konten = Konten::latest()->first();

    // Get the latest 3 'Info' records with image dimensions
    $info = Info::latest()->take(3)->get()->map(function ($item) {
        // Construct the path to the image
        $path = public_path($item->image_path);

        if (file_exists($path)) {
            // Get image size
            list($width, $height) = getimagesize($path);
            $item->width = $width;
            $item->height = $height;
        } else {
            $item->width = null;
            $item->height = null;
        }


        return $item;
    });


    return view('home', compact('apresiasi', 'konten', 'info'));
}
}
