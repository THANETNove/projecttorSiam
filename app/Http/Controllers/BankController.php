<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.bank.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'bank_name' => ['required', 'string', 'max:255'],
            'account_name' => ['required', 'string', 'max:255'],
            'account_number' => ['required', 'string', 'max:255'],
            'bank_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Validate as an image
        ]);
    
        // Initialize a variable to hold the image path
        $imagePath = '';
    
        // Check if an image file is uploaded
        if ($request->hasFile('bank_image')) {
            $image = $request->file('bank_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Get the original extension
    
            // Move the file to the specified directory (e.g., 'public/assets/images/bank')
            $image->move(public_path('assets/images/bank'), $imageName);
    
            // Prepare the path to be saved in the database
            $imagePath = "assets/images/bank/" . $imageName; // Note the use of '.' for concatenation and '/' for path
        }
    
        // Save the data to the database
        $data = new Bank;
        $data->bank_name = $request->input('bank_name');
        $data->account_name = $request->input('account_name');
        $data->account_number = $request->input('account_number');
        $data->bank_image = $imagePath; // Save the path to the image in the database
        $data->save();

              


        return redirect('components/bank')->with('message', "บันทึกสำเร็จ");
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
        //
    }
}