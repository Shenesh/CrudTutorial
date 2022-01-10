<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'exp_date' => 'required',

        ]);

        $product_image = $request->image->getClientOriginalName();
        $request->image->storeAs('product_images',$product_image,'public');
        $product = new Product([
            'product_name' => $request->name,
            'unit_price' => $request->get('price'),
            'description' => $request->get('description'),
            'category_id' => $request->get('category_id'),
            'image' =>  $product_image,
            'exp_date' => $request->get('exp_date'),
        ]);
        $product->save();
        return redirect('/product')->with('success', 'Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        File::delete(public_path('storage/product_images/'. $product->image));
        return redirect()->route('product.index')->with('success', 'Product has been deleted');

    }
    public function show_search_page(){

        $products = Product::all();
        return view ('product.searchpage',compact('products'));
    }

    public function search_example_two(Request $request){

       
    $product = DB::table('products')->where('product_name','like','%'.$request->product.'%')
                                    ->where('unit_price','=',$request->price)
                                    ->get();
    dd($product);
       


    }

    public function search_example(Request $request){
        $products = DB::table('products')->where('product_name','like','%'.$request->search.'%')
                                         ->orWhere('unit_price','like','%'.$request->search.'%')
                                         ->paginate(3);
        return view('product.index', compact('products'));
       
    }
}
