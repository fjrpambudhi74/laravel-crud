<?php

namespace App\Http\Controllers;

use Carbon\Carbon; //Date time function
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        // Get data from database products
        $products = DB::table('products')->get();

        // Send Data to view index
        return view('index', ['products' => $products]);
    }

    public function add()
    {
        // Call view add page
        return view('add');
    }

    // Handle Action Add Product to Database
    public function store(Request $request)
    {

        // Insert Data Form to database
        DB::table('products')->insert([
            'product_name' => $request->product,
            'product_description' => $request->description,
            'product_price' => $request->price,
            'product_quantity' => $request->quantity,
            'created_at' => Carbon::now()
        ]);
        // redirect to homepage
        return redirect('/');
    }

    // Handle Action Edit Product
    public function update(Request $request)
    {
        // Update Data from database from product_id
        DB::table('products')->where('product_id', $request->id)->update([
            'product_name' => $request->product,
            'product_description' => $request->description,
            'product_price' => $request->price,
            'product_quantity' => $request->quantity,
        ]);
        // Redirect to homepage
        return redirect('/');
    }

    public function edit($id)
    {
        // Get Data Products id
        $products = DB::table('products')->where('product_id', $id)->get();
        // Call view edit page
        return view('edit', ['products' => $products]);
    }

    public function delete($id)
    {
        // Delete Data from product id
        DB::table('products')->where('product_id', $id)->delete();
        // Redirect to homepage
        return redirect('/');
    }
}
