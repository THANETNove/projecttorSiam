<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorthKnowing;
use Illuminate\Support\Facades\DB;

class WorethKnowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('worth_knowings')
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.knowBefore.index', ['data' =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.knowBefore.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new WorthKnowing;
        $data->description = $request['description'];
        $data->save();

        return redirect('services/knowBefore/index')->with('message', "บันทึกสำเร็จ");
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
        $data = WorthKnowing::find($id); // ค้นหาผู้ใช้ที่มี ID = 1
        return view('admin.knowBefore.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =  WorthKnowing::find($id);
        $data->description = $request['description'];
        $data->save();

        return redirect('services/knowBefore/index')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = WorthKnowing::find($id); // ค้นหาผู้ใช้ที่มี ID = 1

        $data->delete(); // ลบ Product

        return redirect('/services/knowBefore/index')->with('message', "ลบข้อมูลสำเร็จ");
    }
}
