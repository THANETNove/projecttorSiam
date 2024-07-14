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
        ->leftJoin('navbar_manu_mains', 'navbar_manu_mains.id', '=', 'menu_bars.use')
        ->select('menu_bars.use', 'menu_bars.feature', 'menu_bars.resolution', 'navbar_manu_mains.name_manu', 'navbar_manu_mains.id')
        ->orderBy('menu_bars.use')
        ->orderBy('menu_bars.resolution')
        ->get();
    

        return view('admin.manuBar.index',['data' =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = DB::table('navbar_manu_mains')
        ->where('id', $id)
        ->get();
        return view('admin.manuBar.create',['id' => $id,'data' => $data ]);
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
        $data = DB::table('navbar_manu_mains')
        ->where('id', $id)
        ->get();

        return view('admin.manuBar.edit',['manu' => $manu ,'data' => $data]);
    
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