<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller

{
    public function index()
    {
        $sales = Crud::all();
        return view('welcome', compact('sales'));
        }

        /***

    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($validated['product_id']);
        if ($product->stock < $validated['quantity']) {
            return redirect()->back()->with('error', 'Insufficient stock.');
        }

        // Kurangi stok produk
        $product->stock -= $validated['quantity'];
        $product->save();

        // Hitung total harga
        $validated['total_price'] = $product->price * $validated['quantity'];

        Sale::create($validated);

        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }


    public function show($id)
    {
        $sale = Sale::with('product')->find($id);

        if (!$sale) {
            return redirect()->route('sales.index')->with('error', 'Sale not found.');
        }

        return view('sales.show', compact('sale'));
    }


    public function edit($id)
    {
        $sale = Sale::find($id);
        $products = Product::all();

        if (!$sale) {
            return redirect()->route('sales.index')->with('error', 'Sale not found.');
        }

        return view('sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return redirect()->route('sales.index')->with('error', 'Sale not found.');
        }

        $validated = $request->validate([
            'product_id' => 'exists:products,id',
            'quantity' => 'integer|min:1',
        ]);

        $product = Product::find($validated['product_id'] ?? $sale->product_id);

        if ($product->stock + $sale->quantity < ($validated['quantity'] ?? $sale->quantity)) {
            return redirect()->back()->with('error', 'Insufficient stock.');
        }

        // Update stok produk lama dan baru
        $product->stock += $sale->quantity; // Kembalikan stok lama
        $product->stock -= $validated['quantity'] ?? $sale->quantity; // Kurangi stok baru
        $product->save();

        // Hitung total harga baru
        $validated['total_price'] = $product->price * ($validated['quantity'] ?? $sale->quantity);

        $sale->update($validated);

        return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
    }


    public function destroy($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return redirect()->route('sales.index')->with('error', 'Sale not found.');
        }

        // Kembalikan stok produk
        $product = $sale->product;
        $product->stock += $sale->quantity;
        $product->save();

        $sale->delete();

        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');
    }
        */
}

