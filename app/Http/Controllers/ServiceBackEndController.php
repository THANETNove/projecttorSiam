<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServeiceBackEnd;
use Illuminate\Support\Facades\DB;


class ServiceBackEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = DB::table('serveice_back_ends')
            ->get();


        return view('admin.services.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = new ServeiceBackEnd;
        $data->description = $request['description'];
        $data->save();

        return redirect('/service/index')->with('message', "บันทึกสำเร็จ");
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

        $data = ServeiceBackEnd::find($id); // ค้นหาผู้ใช้ที่มี ID = 1
        return view('admin.services.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =  ServeiceBackEnd::find($id);
        $data->description = $request['description'];
        $data->save();
        return redirect('/service/index')->with('message', "เเก้ไขสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
