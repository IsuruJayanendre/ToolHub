<?php

namespace App\Http\Controllers;

use App\Models\Inventry_new;
use Illuminate\Http\Request;


class InventryNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        $inventry_news= Inventry_new::all();
        return view('inventory.index', compact('inventry_news'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);

        $request->validate([
            'toolName' => 'required',
            'price' => 'required',
            'catagory' => 'required',
            'quantity' => 'required',
            'image' => 'required',
        
        ]);


        $inventry_new = Inventry_new::create([

            'toolName' => $request->toolName,
            'price' => $request->price,
            'catagory' => $request->catagory,
            'quantity' => $request->quantity,
            'image' => $request->image,
            
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/Inventory_new'), $filename);
    
            // Update the inventory item with the image filename
            $inventry_new->update(['image' => $filename]);
        }
    

   
               return redirect()->back()->with('success', 'Inventory item created successfully.');;
              //return redirect()->route('inv')->with('success', 'Inventory item created successfully.')
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventry_new $inventry_new)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventry_new $inventry_new)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventry_new $inventry_new)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventry_new $inventry_new)
    {
        //
    }
}
