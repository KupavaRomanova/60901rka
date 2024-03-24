<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Отображение всех товаров
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owners = User::all();
        $categories = Category::all();
        return view('products.create', compact('owners', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'owner_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'count' => 'required|integer|min:0',
        ]);
    
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->owner_id = $request->owner_id;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->hasFile('photo')) {
            $product->photo = Storage::url($request->file('photo')->store('public/products'));
        }
        $product->count = $request->count;
        $product->save();
    
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */

     // Отображение одного товара и связанных с ним заказов
    public function show(Product $product)
    {
        $orders = $product->orders;
        return view('products.show', ['product' => $product, 'orders' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            // 'owner_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'count' => 'required|integer|min:0',
        ]);
    
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->hasFile('photo')) {
            $product->photo = Storage::url($request->file('photo')->store('public/products'));
        }
        $product->count = $request->count;
        $product->save();
    
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index');
    }
}
