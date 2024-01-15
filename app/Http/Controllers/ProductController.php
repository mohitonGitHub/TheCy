<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::with('type')->get();
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

        $store = new Product();
        $store->product_name = $request->product_name;
        $store->product_sub_name = $request->product_sub_name;
        $store->product_type = $request->product_type;
        $store->product_details = $request->product_details;
        $store->gender = $request->gender;

        $images = $request->product_image;        
        if ($images) {
            foreach ($images as $image) {
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('product_image'), $imageName);
                $imgarr[] = $imageName;
            }
            $obj = json_encode($imgarr);
            $store->product_image = $obj;
        }

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
            'product_details' => 'required',
        ]);

        $update = Product::findorfail($id);
        $update->product_name = $request->product_name;
        $update->product_sub_name = $request->product_sub_name;
        $update->product_type = $request->product_type;
        $update->product_details = $request->product_details;
        $update->gender = $request->gender;

        $images = $request->product_image;
        if ($images) {
            foreach ($images as $image) {
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('product_image'), $imageName);
                $imgarr[] = $imageName;
            }
            $obj = json_encode($imgarr);
            $update->product_image = $obj;
        } else {
            $update->product_image = $request->product_old_image;
        }
        $update->save();

        if ($update) {
            return redirect('dashboard/product')->with('success', 'Product has been updated!!');
        } else {
            return redirect('dashboard/product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
        }
    }

    public function destroy(string $id)
    {
        $delete = Product::findorfail($id);
        $dl = json_decode($delete->product_image);
        $d = implode($dl);

        $file_path = public_path('product_image') . '/' . $d;
        if (File::exists($file_path)) {
            File::delete($file_path);
        }

        $delete->delete();

        if ($delete) {
            return redirect('dashboard/product')->with('success', 'Product deleted sucessfully!!');
        } else {
            return redirect('dashboard/product')->with('fail', 'Something Went wrong!! Adarsh ki galti hogi');
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
