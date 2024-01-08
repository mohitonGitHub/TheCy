<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('dashboard/products', compact('product'));
    }

    public function create()
    {
        $Ptype = ProductType::all();
        return view('dashboard/add-product', compact('Ptype'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required',
            'product_details' => 'required',
        ]);

        // dd($request);

        $store = new Product();
        $store->product_name = $request->product_name;
        $store->product_sub_name = $request->product_sub_name;
        $store->product_type = $request->product_type;
        $store->product_details = $request->product_details;
        $store->gender = $request->gender;   

        // $image = $request->file('product_image');

        if ($request->hasFile('product_image')) {
            foreach ($request->file('images') as $image) {
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('product_image', $imageName); // Store image in storage                
                $store->product_image = $imageName;
            }
        }

        // if($image != ''){
        //     // foreach($image as $img){
        //     //     $image_name = rand() . '.' . $img->getClientOriginalExtension();
        //     //     $img->move(public_path('product_image'), $image_name);
        //     // }
        //     // dd($image);
        //     foreach ($image as $photo) {
        //         dd($photo);
        //         $sto = json_encode($photo);
        //         $image_name = rand() . '.' . $photo->getClientOriginalExtension();
        //         // $photo->move(public_path('product_image'), $image_name);
        //     }

        //     dd($sto);
        //     $store->product_image = $image_name;
        // }


        // if ($image != '') {
        //     foreach ($image as $img) {
        //         $image_name = rand() . '.' . $image->getClientOriginalExtension();
        //         $image->move(public_path('product_image'), $image_name);
        //         dd($image_name);
        //         $store->product_image = $image_name;
        //     }
        // }       

        $store->save();

        if ($store) {
            return redirect('dashboard/product')->with('success', 'Product has been added!!');
        } else {
            return redirect('dashboard/product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
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

        $update = Product::with('type')->findorfail($id);

        $Ptype = ProductType::all();
        return view('dashboard/update', compact('update', 'Ptype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_type' => 'required',
            'product_desc' => 'required',
            'product_details' => 'required',
        ]);
        $update = Product::findorfail($id);
        $sizes = $request->product_size;
        $sizesObject = json_encode($sizes);

        $update->product_name = $request->product_name;
        $update->product_price = $request->product_price;
        $update->product_type = $request->product_type;
        if ($sizesObject != 'null') {
            $update->product_size = $sizesObject;
        } else {
            $update->product_size = NULL;
        }
        $update->gender = $request->gender;
        $update->product_color = $request->product_color;
        $update->product_desc = $request->product_desc;
        $update->product_details = $request->product_details;

        $image = $request->file('product_image');
        if ($image != '') {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_image'), $image_name);
            $update->product_image = $image_name;
        } else {
            $update->product_image = $request->old_product_image;
        }
        $update->save();

        if ($update) {
            return redirect('product')->with('success', 'Product has been updated!!');
        } else {
            return redirect('product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Product::findorfail($id);
        $delete->delete();

        if ($delete) {
            return redirect('product')->with('success', 'Product deleted sucessfully!!');
        } else {
            return redirect('product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
    }

    public function product_type()
    {
        $data = ProductType::get();
        return view('dashboard/product-type', compact('data'));
    }

    public function product_type_store(Request $request)
    {
        $request->validate([
            'product_type' => 'required',
        ]);

        $store = new ProductType();
        $store->product_type = $request->product_type;
        $store->save();

        if ($store) {
            return redirect('dashboard/product-type')->with('success', 'Product type added sucessfully!!');
        } else {
            return redirect('dashboard/product-type')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
    }
}
