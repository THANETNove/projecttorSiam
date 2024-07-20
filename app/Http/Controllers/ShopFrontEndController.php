<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopFrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name)
    {

    

        $data = DB::table('products')
        ->whereRaw('JSON_CONTAINS(check_manu, ?)', [json_encode($name)])
        ->where('status_sell', "on")
        ->orderBy('id', 'DESC')
        ->paginate(100)
        ->appends(['name' => $name]);


        $brands = DB::table('products')
        ->whereNotNull('brand' )
        ->where('status_sell', "on")
        ->orderBy('id', 'DESC')
        ->select('brand') // เพิ่ม category
        ->groupBy('brand')
        ->get();

 
 

        return view('frontEndWeb.shop' ,['data' => $data, 'brands' => $brands]);
    }

    
    public function filterByBrand($name)
    {


        $data = DB::table('products')
        ->where('brand', $name)
        ->where('status_sell', "on")
        ->orderBy('id', 'DESC')
        ->paginate(100)
        ->appends(['name' => $name]);


        $brands = DB::table('products')
        ->whereNotNull('brand' )
        ->where('status_sell', "on")
        ->orderBy('id', 'DESC')
        ->select('brand') // เพิ่ม category
        ->groupBy('brand')
        ->get();

 
 

        return view('frontEndWeb.shop' ,['data' => $data, 'brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function buyNow()
    {

        
        return view('frontEndWeb.buyNow');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name, $id)
    {

        $data = DB::table('products')
        ->where('id', $id)
        ->orderBy('id', 'DESC')
        ->get();


     // แปลงค่า check_manu จาก JSON string เป็น array
    $check_manu_array = json_decode($data[0]->check_manu);

    // เริ่มต้น query
    $query = DB::table('products')
        ->where('status_sell', "on")
        ->orderBy('id', 'DESC');

    // เพิ่มเงื่อนไขสำหรับแต่ละค่าใน array
    foreach ($check_manu_array as $check_manu) {
        $query->orWhereRaw('JSON_CONTAINS(check_manu, ?)', [json_encode($check_manu)]);
    }

    // จำกัดผลลัพธ์ให้เหลือ 3 รายการ
    $dataSlid = $query->take(9)->get();

    // แสดงผลข้อมูล
   
    return view('frontEndWeb.particulars' ,['data' => $data, 'dataSlid' => $dataSlid]);
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