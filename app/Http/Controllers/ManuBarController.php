<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuBar;
use Illuminate\Support\Facades\File;
use DB;

class ManuBarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = DB::table('menu_bars')
        ->orderBy('use')
        ->orderBy('resolution')
        ->get();

        return view('admin.manuBar.index',['data' =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
      
        return view('admin.manuBar.create',['id' => $id ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'use' => ['required', 'string', 'max:255'],
            'feature' => ['required', 'string', 'max:255'],
            'resolution' => ['required','string', 'max:255'], // Validate as an image
        ]);
    
        // Initialize a variable to hold the image path
      
    
        // Save the data to the database
        $data = new MenuBar;
        $data->use = $request->input('use');
        $data->feature = $request->input('feature');
        $data->resolution = $request->input('resolution');
        $data->save();

              


        return redirect('components/manuBar')->with('message', "บันทึกสำเร็จ");
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
        $manu = MenuBar::find($id); // ค้นหาผู้ใช้ที่มี ID = 1

        return view('admin.manuBar.edit',['manu' => $manu ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'use' => ['required', 'string', 'max:255'],
            'feature' => ['required', 'string', 'max:255'],
            'resolution' => ['required','string', 'max:255'], // Validate as an image
        ]);
    
        // Initialize a variable to hold the image path
      
    
        // Save the data to the database
        $data = MenuBar::find($id);
        $data->use = $request->input('use');
        $data->feature = $request->input('feature');
        $data->resolution = $request->input('resolution');
        $data->save();

        return redirect('components/manuBar')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}