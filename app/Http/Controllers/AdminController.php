<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Apresiasi;
Use App\Models\Info;
Use App\Models\Konten;
Use App\Models\kritiksaran;
use Illuminate\Support\Facades\Response;
class AdminController extends Controller
{
    public function GetHome(){
        $apresiasi = Apresiasi::all();
        $konten = Konten::latest()->first();
        return view('Admin/admin-home',compact('apresiasi','konten'));
    }
    public function PostApresiasi(Request $request){
        // Check if there are already 2 Apresiasi records
        $apresiasiCount = Apresiasi::count();

        if ($apresiasiCount >= 2) {
            // Redirect back with an error message if there are already 2 records
            return redirect()->back()->with('error', 'You can only add up to 2 Apresiasi.');
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'apresiasiImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'apresiasiText' => 'required|string',
        ]);
        // Move image to public/image folder
        $fileName = time().$request->file('apresiasiImage')->getClientOriginalName();
        $request->apresiasiImage->move(public_path('image'), $fileName);
        Apresiasi::create([
            'title' => $request->title,
            'image_path' => 'image/'.$fileName,
            'description' => $request->apresiasiText,
        ]);
        return redirect()->back()->with('success', 'Apresiasi has added successfully!');
    }
    public function UpdateApresiasi(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Find the specific Apresiasi record by its ID
        $apresiasi = Apresiasi::find($id);

        // Update the title and description
        $apresiasi->title = $request->title;
        $apresiasi->description = $request->description;

        // Save the updated data to the database
        $apresiasi->save();

        return redirect()->back()->with('success', 'Apresiasi updated successfully.');
    }
    public function DeleteApresiasi($id)
    {
        $info = Apresiasi::findOrFail($id);

        // Get the old image path
        $oldImagePath = $info->image_path;
        if ($oldImagePath && file_exists(public_path($oldImagePath))) {
            unlink(public_path($oldImagePath));
        }
        // Find and delete the Apresiasi record
        $apresiasi = Apresiasi::find($id);

        if ($apresiasi) {
            $apresiasi->delete();
        }

        return redirect()->back()->with('success', 'Apresiasi deleted successfully.');
    }
    public function PostKonten(Request $request){
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'youtubeLink' => 'required|string',
        ]);

        $konten = Konten::latest()->first();

        // Check if $konten exists
        if ($konten) {
            // Redirect back with an error message if konten exists
            return redirect()->back()->with('error', 'Content already exists Max upload only 1 ');
        }

        Konten::create([
            'title' => $request->title,
            'youtube' => $request->youtubeLink,
        ]);
        return redirect()->back()->with('success', 'New content successfully upload.');
    }
    public function DeleteKonten($id){
        // Find the konten by ID
        $konten = Konten::find($id);

        // Check if the konten exists
        if ($konten) {
            // Delete the konten
            $konten->delete();

            // Optionally, redirect back with a success message
            return redirect()->back()->with('success', 'Konten deleted successfully!');
        } else {
            // If konten not found, return an error message
            return redirect()->back()->with('error', 'Konten not found!');
        }
        return redirect()->back()->with('success', 'Content deleted successfully.');
    }
    public function PostAddInfo(Request $request){
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'short_description' => 'required|string|max:10240',
            'long_description' => 'required|string',
            'register' => 'nullable|url',
            'download' => 'nullable|url',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'whatsapp' => 'nullable|numeric',
        ]);
        // Move image to public/image folder
        $fileName = time().$request->file('image_path')->getClientOriginalName();
        $request->image_path->move(public_path('image'), $fileName);

        // Save the data to the database
        Info::create([
            'title' => $request->title,
            'category' => $request->category,
            'image_path' => 'image/'.$fileName,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'register' => $request->register,
            'download' => $request->download,
            'website' => $request->website,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
        ]);
        return redirect()->back()->with('success', 'Info added successfully!');
    }
    public function GetInfo(Request $request){
        $search = $request->input('search_input');

        // Apply the search query within the query builder
        $info = Info::select('id','title', 'short_description')
        ->when($search, function ($query, $search) {
            return $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($search) . '%']);
        })
        ->paginate(5);
        return view('Admin/admin-info', compact('info')); // Pass the data to your view
    }
    public function GetEditInfo($id){
        $info = Info::find($id);
        return view('Admin/admin-editinfo',compact('info')); // Pass data to view
    }
    public function PostEditInfo(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'short_description' => 'required|string|max:10240',
            'long_description' => 'required|string',
            'register' => 'nullable|url',
            'download' => 'nullable|url',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'whatsapp' => 'nullable|numeric',
        ]);
        // Get the record to be updated
        $info = Info::findOrFail($request->id);

        // Get the old image path
        $oldImagePath = $info->image_path;
        // Insert New Image
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists
            if ($oldImagePath && file_exists(public_path($oldImagePath))) {
                unlink(public_path($oldImagePath));
            }
            $fileName = time() . $request->file('image_path')->getClientOriginalName();
            $request->file('image_path')->move(public_path('image'), $fileName);

            // Update the record using the query builder approach
            Info::where('id', $request->id)->update([
                'title' => $request->title,
                'category' => $request->category,
                'image_path' => 'image/'.$fileName,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'register' => $request->register,
                'download' => $request->download,
                'website' => $request->website,
                'instagram' => $request->instagram,
                'whatsapp' => $request->whatsapp,
            ]);
        }
        else{
            Info::where('id', $request->id)->update([
                'title' => $request->title,
                'category' => $request->category,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'register' => $request->register,
                'download' => $request->download,
                'website' => $request->website,
                'instagram' => $request->instagram,
                'whatsapp' => $request->whatsapp,
            ]);
        }
        return redirect()->back()->with('success', 'Info updated successfully!');
    }
    public function DeleteInfo(Request $request, $id){
        $info = Info::findOrFail($id);

        // Get the old image path
        $oldImagePath = $info->image_path;
        if ($oldImagePath && file_exists(public_path($oldImagePath))) {
            unlink(public_path($oldImagePath));
        }
        $record = Info::find($id); // Replace $id with the ID of the record you want to delete
        if ($record) {
            // Delete the record
            $record->delete();
        }

        return redirect()->back()->with('success','item is already delated');
    }
    public function GetKritik(){
        $kritik= kritiksaran::paginate(5);
        return view('Admin.admin-kritikSaran',compact('kritik'));
    }
    public function DeleteKritik($id){
        $kritik = kritiksaran::find($id);
        if ($kritik) {
            $kritik->delete();
        }

        return redirect()->back()->with('success', 'Kritik & Saran deleted successfully.');
    }
    public function exportKritik()
    {
        // Fetch all data from kritiksarans table
        $kritiksarans = Kritiksaran::all();

        // Define the CSV headers
        $csvHeader = ['ID', 'Name', 'Message', 'Created At', 'Updated At'];

        // Open a temporary memory stream
        $output = fopen('php://output', 'w');

        // Write headers to CSV file
        fputcsv($output, $csvHeader);

        // Write each record to the CSV
        foreach ($kritiksarans as $kritik) {
            fputcsv($output, [
                $kritik->id,
                $kritik->name,
                $kritik->kritiksaran,
                $kritik->created_at,
                $kritik->updated_at
            ]);
        }

        // Create CSV response with correct headers
        return Response::streamDownload(function() use ($output) {
            // Close the output stream
            fclose($output);
        }, 'kritiksarans.csv', [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="kritiksarans.csv"',
        ]);
    }
}
