<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Apresiasi;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
class InfoController extends Controller
{
    public function loadAllInfo(Request $request){
        // Get the latest 5 'Info' records for newinfo display
        $newinfo = Info::orderBy('created_at', 'desc')->take(5)->get();

        // Get sorting and category filters
        $sort = $request->get('sort', 'latest') === 'oldest' ? 'asc' : 'desc';
        $category = $request->get('category', 'all');

        // Fetch records from Info based on sorting and category filters
        $infosQuery = Info::orderBy('created_at', $sort);
        $apresiasisQuery = Apresiasi::orderBy('created_at', $sort);

        if ($category !== 'all') {
            if ($category === 'prestasi') {
                // If category is "prestasi," only fetch Apresiasi records
                $infos = collect(); // Empty collection for Info
                $apresiasis = $apresiasisQuery->get()->each(function ($item) {
                    $item->category = 'Prestasi';
                });
            } else {
                // For other categories, filter only Info records
                $infosQuery->where('category', $category);
                $infos = $infosQuery->get();
                $apresiasis = collect(); // Empty collection for Apresiasi
            }
        } else {
            // If no specific category, fetch both Info and Apresiasi records
            $infos = $infosQuery->get();
            $apresiasis = $apresiasisQuery->get()->each(function ($item) {
                $item->category = 'Prestasi';
            });
        }

        // Combine both collections
        $combined = $infos->concat($apresiasis);

        // Sort the combined collection by created_at
        $combined = $sort === 'asc' ? $combined->sortBy('created_at') : $combined->sortByDesc('created_at');
        // Add width and height properties to each item in the combined collection
        $combined = $combined->map(function ($item) {
            $path = public_path($item->image_path);

            if (file_exists($path)) {
                list($width, $height) = getimagesize($path);
                $item->width = $width;
                $item->height = $height;
            } else {
                $item->width = null;
                $item->height = null;
            }

            return $item;
        });

        // Paginate the combined collection manually
        $perPage = 9; // Set the number of items per page
        $page = $request->input('page', 1);
        $paginatedCombined = new LengthAwarePaginator(
            $combined->forPage($page, $perPage), // Items for the current page
            $combined->count(), // Total items
            $perPage, // Items per page
            $page, // Current page
            ['path' => $request->url(), 'query' => $request->query()] // Pagination options
        );

        // Pass infos and newinfo to the view
        return view('info', [
            'infos' => $paginatedCombined,
            'newinfo' => $newinfo
        ]);
    }
    public function infoDetails($id)
    {
        $info = Info::where('title', $id)->first();
        $prestasi = Apresiasi::where('title', $id)->first();
        if (!$info & !$prestasi) {
            abort(404);
        }
        else if($prestasi){
            return view('prestasi',compact('prestasi'));
            //dd($prestasi);
        }
        else if($info){
            return view('info2', compact('info'));
        }
    }
    public function searchInfo(Request $request){
        $query = $request->input('search_input');

        $newinfo = Info::orderBy('created_at', 'desc')->take(5)->get();

        $infosQuery = Info::where('title', 'LIKE', "%{$query}%")->get();
        $apresiasisQuery = Apresiasi::where('title', 'LIKE', "%{$query}%")->get();

        $apresiasis = $apresiasisQuery->each(function ($item) {
            $item->category = 'Prestasi';
        });
        // Combine both collections
        $combined = $infosQuery->concat($apresiasis);
        $combined = $combined->map(function ($item) {
            $path = public_path($item->image_path);

            if (file_exists($path)) {
                list($width, $height) = getimagesize($path);
                $item->width = $width;
                $item->height = $height;
            } else {
                $item->width = null;
                $item->height = null;
            }

            return $item;
        });
         // Paginate the combined collection manually
         $perPage = 9; // Set the number of items per page
         $page = $request->input('page', 1);
         $paginatedCombined = new LengthAwarePaginator(
             $combined->forPage($page, $perPage), // Items for the current page
             $combined->count(), // Total items
             $perPage, // Items per page
             $page, // Current page
             ['path' => $request->url(), 'query' => $request->query()] // Pagination options
         );
         return view('info', [
            'infos' => $paginatedCombined,
            'newinfo' => $newinfo
        ]);
    }
}
