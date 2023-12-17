<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $product= Product::findOrFail($id);
        return view('Order.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product= Product::findOrFail($request->product_id);
        if( $request->quantity > $product->quantity ){
            return redirect()->back()->with('error', 'Quantity is greater than available quantity!');
        }        
        
        Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity, 
            'total_amount' => $request->quantity * $request->price,
        ]);

       
        $product->quantity = $product->quantity - $request->quantity;
        $product->save();
        return redirect()->route('index')->with('success', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
