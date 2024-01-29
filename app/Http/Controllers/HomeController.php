<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();
        // dd($product);
        return view('index', compact('product'));
    }

    public function allItem()
    {
        $product = Product::with('type')->simplePaginate(4);
        // dd($product);
        return view('all-item', compact('product'));
    }

    public function singleProduct($id)
    {
        $data = Product::with('type')->findOrfail($id);
        return view('single-product', compact('data'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function contact_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric|min:10',
            'fabric' => 'required',
            'canwecall' => 'required',
            'inquiry' => 'required',
        ]);

        $store = new Contact();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->number = $request->number;
        $store->fabric = $request->fabric;
        $store->inquiry = $request->inquiry;
        $store->canwecall = $request->canwecall;
        $store->save();

        if ($store) {
            return redirect('contact')->with('success', 'Thank you for reaching out. We will respond promptly.');
        } else {
            return redirect('contact')->with('fail', 'Something went wrong!!');
        }
    }

    public function sorting(Request $request)
    {
        $query = Product::query();
        if ($request->ajax()) {
            if ($request->data == "lowTohigh") {
                $product = $query->orderBy('product_price', 'ASC')->get();
                return response()->json(['products' => $product]);
            }
            if ($request->data == "latest") {
                $product = $query->orderBy('created_at', 'ASC')->get();
                return response()->json(['products' => $product]);
            }
            if ($request->data == "highTolow") {
                $product = $query->orderBy('product_price', 'DESC')->get();
                return response()->json(['products' => $product]);
            }
        }
    }

    public function blog()
    {
        return view('blog');
    }
}
