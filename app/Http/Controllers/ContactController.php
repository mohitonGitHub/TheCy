<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use PDO;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric|min:10, max:10',
            'canwecall' => 'required',
            'inquiry' => 'required',
        ]);

        $store = new Contact();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->number = $request->number;
        $store->inquiry = $request->inquiry;
        $store->canwecall = $request->canwecall;
        $store->save();

        if ($store) {
            return redirect('contact')->with('success', 'Thank you for reaching out. We will respond promptly.');
        } else {
            return redirect('contact')->with('fail', 'Something went wrong!!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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

    public function inquiries()
    {
        $inq = Contact::all();
        return view('dashboard/inquiries', compact('inq'));
    }
}
