<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('products')
        ->orderBy('id', 'DESC')
        ->get();

        return view('admin.product.index',['data' =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = DB::table('menu_bars')
        ->leftJoin('navbar_manu_mains', 'navbar_manu_mains.id', '=', 'menu_bars.use')
        ->select('menu_bars.use', 'menu_bars.feature', 'menu_bars.resolution', 'navbar_manu_mains.name_manu', 'navbar_manu_mains.id')
        ->orderBy('menu_bars.use')
        ->orderBy('menu_bars.resolution')
        ->get();

        
        return view('admin.product.create', ['data' =>  $data]);
    }
    
    public function manuBarApi($id)
    {
        $data = DB::table('menu_bars')
        ->orderBy('use')
        ->orderBy('resolution')
        ->get();

    return response()->json($data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
          /*   'product_name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'check_manu' => 'required', */
            'link_lazada' => ['nullable', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?(\?.*)?$/'],
            'link_shopee' => ['nullable', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?(\?.*)?$/'],
            'other_links' => ['nullable', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?(\?.*)?$/'],
        ], [
            'link_lazada.url' => 'The link Lazada must be a valid URL.',
            'link_shopee.url' => 'The link Shopee must be a valid URL.',
            'other_links.url' => 'The link Other_links must be a valid URL.',
        ]);

        // Check if images are uploaded
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                // Generate unique filename
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Move the image to the specified directory
                $image->move(public_path('assets/images/product'), $imageName);

                // Store or use $imageName as needed
                $imagePaths[] = 'assets/images/product/' . $imageName; // Store paths to use or save in database
            }

            // $imagePaths now contains paths to all uploaded images
        }

        
        $data = new Product;
        $data->product_name = $request['product_name'];
        $data->price = $request['price'];
       /*  $data->display = $request['display'];
        $data->contrast_ratio = $request['contrast_ratio'];
        $data->resolution = $request['resolution'];
        $data->brightness = $request['brightness']; */
        $data->availability = $request['availability'];
        $data->description = $request['description'];
        $data->specification = $request['specification'];
        $data->ratio_screen = $request['ratio_screen'];
        $data->throw_ratio_min = $request['throw_ratio_min'];
        $data->throw_ratio_max = $request['throw_ratio_max'];
        $data->link_lazada = $request['link_lazada'];
        $data->link_shopee = $request['link_shopee'];
        $data->other_links = $request['other_links'];
        $data->check_manu = json_encode($request->check_manu);
        $data->image = json_encode($imagePaths);
        $data->price_sale = $request['price_sale'];
        $data->product_code = $request['product_code'];
        $data->status_sale = $request->input('status_sale', 'off');
        $data->status_sell = $request->input('status_sell', 'off');
        
        $data->save();
        return redirect('/product/product_all')->with('message', "บันทึกสำเร็จ");
    }
   /* Í */

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