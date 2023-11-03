<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(){
        $this-> middleware('auth') -> only('store', 'edit', 'delete');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'))
            ->with('i', (request()-> input('page', 1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'category' => 'required',
            'company' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,gif,svg,afiv,webp|max:2048'

        ]);

        $input = $request -> all();

        if ($image = $request -> file('image')) {
            $destinationFile = 'images/';
            $profileImage = date('YmdHis').".".$image -> getClientOriginalExtension();
            $image -> move($destinationFile, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);
        return redirect()-> route('products.index')
            -> with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request -> validate([
            'name' => 'required',
            'category' => 'required',
            'company' => 'required',
            'description' => 'required'
        ]);

        $input = $request -> all();

        if ($image = $request -> file('image')) {
            $destinationFile = 'images/';
            $profileImage = date('YmdHis').".".$image -> getClientOriginalExtension();
            $image -> move($destinationFile, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $product -> update($input);
        return redirect()-> route('products.index')
        -> with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product -> delete();
        return redirect()-> route('products.index')
        -> with('success', 'Product Deleted Successfully');
    }

}
