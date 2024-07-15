<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideHome;
use Illuminate\Support\Facades\File;
use DB;

class SlideHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('slide_homes')
        ->get();

        
        return view('admin.slideHome.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slideHome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'slide_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Validate as an image
        ]);
    
        // Initialize a variable to hold the image path
        $imagePath = '';
    
        // Check if an image file is uploaded
        if ($request->hasFile('slide_image')) {
            $image = $request->file('slide_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Get the original extension
    
            // Move the file to the specified directory (e.g., 'public/assets/images/bank')
            $image->move(public_path('assets/images/slideHome'), $imageName);
    
            // Prepare the path to be saved in the database
            $imagePath = "assets/images/slideHome/" . $imageName; // Note the use of '.' for concatenation and '/' for path
        }
    
        // Save the data to the database
        $data = new SlideHome;
        $data->slide_image = $imagePath; // Save the path to the image in the database
        $data->save();

              


        return redirect('components/slide')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
        $user = SlideHome::find($id); // ค้นหาผู้ใช้ที่มี ID = 1


       
        $imagePath = $user->slide_image;

        // ตรวจสอบว่าภาพนั้นมีอยู่ในระบบไฟล์หรือไม่
        if (File::exists(public_path($imagePath))) {
         
            File::delete(public_path($imagePath));
        } else {
            // หากภาพไม่พบในระบบไฟล์
           
        }


            $user->delete(); // ลบผู้ใช้นั้น
  
       return redirect('components/slide')->with('message', "ลบข้อมูลสำเร็จ");
    }
}