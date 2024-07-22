<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\ShoppingList;
use App\Mail\ExampleMail;
use Mail;

use Illuminate\Support\Facades\Session;


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


    
        if (Auth::check()) {
            $data = DB::table('users')
                ->where('users.id', Auth::user()->id)
                ->leftJoin('addresses', 'users.id', '=', 'addresses.user_id')
                ->select('users.*', 'addresses.phone', 'addresses.fax', 'addresses.company', 'addresses.address_1', 'addresses.address_2',
                    'addresses.state_city', 'addresses.postal_zip', 'addresses.country', 'addresses.region')
                ->orderBy('users.id', 'DESC')
                ->get();
        } else {
            // Handle the case where the user is not authenticated
            $data = collect(); // Return an empty collection or handle as needed
        }

        
        return view('frontEndWeb.buyNow',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string', 'max:255'],
            'state_city' => ['required', 'string', 'max:255'],
            'postal_zip' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
        ]);

        
        $items = json_decode($request->itemCart[0], true);

        // ตรวจสอบว่าการแปลง JSON สำเร็จ
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid JSON'], 400);
        }
    
        // คำนวณผลรวมทั้งหมดของ totalPrice
        $totalPriceSum = array_reduce($items, function ($sum, $item) {
            return $sum + $item['totalPrice'];
        }, 0);
    

        $priceSum =  number_format($totalPriceSum);
        // แสดงผลรวมทั้งหมด

        $data = new ShoppingList;
        
        $data->itemCart = json_encode($items);
        $data->totalPrice = $totalPriceSum;
        $data->fname = $request['fname'];
        $data->lname = $request['lname'];
        $data->email = $request['email'];
        $data->phone = $request['phone'];
        $data->fax = $request['fax'];
        $data->company = $request['company'];
        $data->address_1 = $request['address_1'];
        $data->address_2 = $request['address_2'];
        $data->state_city = $request['state_city'];
        $data->postal_zip = $request['postal_zip'];
        $data->country = $request['country'];
        $data->region = $request['region'];
       // $data->save();

        $mail = 'siammp@hotmail.co.th';

       /*  Mail::to($request['email'])->send(new ExampleMail($data));
        Mail::to($mail)->send(new ExampleMail($data)); */
        return view('emails.succeedSendEmail',['data' => $data]);
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