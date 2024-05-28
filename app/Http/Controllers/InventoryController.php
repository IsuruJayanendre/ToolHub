<?php

namespace App\Http\Controllers;


use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'toolName' => 'required',
            'price' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }

       /* Inventory::create([
            'toolName' => $request->toolName,
            'price' => $request->price,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'image' => $path,
        ]); */

        $inventory = Inventory::create([

            'toolName' => $request->toolName,
            'price' => $request->price,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'image' => $path,






        ]);



       // return redirect()->route('inv')->with('success', 'Inventory item created successfully.');
       return redirect(back);
    }

    /**
     * Display the specified resource.
     */
    public function show(inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inventory $inventory)
    {
        //
    }
}
