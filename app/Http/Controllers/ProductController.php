<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        return view("products/viewproducts", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("products/createproducts", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = Validator::make($request->all(), [

            "product_image" => "image|required"
        ]);
        if ($validated->fails()) {
            return back()->with("errors", $validated->errors());
            dd($validated->errors());
        }

        if ($request->hasFile("product_image")) {
            $filenameWithExtension = $request->file("product_image")->getClientOriginalName();
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $entension = $request->file("product_image")->getClientOriginalExtension();

            $nameToStore = $filename . "_" . time() . "." . $entension;
            $path = $request->file("product_image")->storeAs("public/images/product_image", $nameToStore);
            $product = new Product();

            $product->name = $request['name'];
            $product->product_image = $nameToStore;
            $product->description = $request['description'];
            $product->category = $request['category'];
            $product->price = $request['price'];
            $product->sell_price = $request['sell_price'];
            $product->qty = $request['qty'];
            $product->qty_type = $request['qty_type'];


            $product->save();
            return Redirect::back()->with('success', "Product created successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("products/productdetails", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('products/editproducts', ['categories' => Category::all(), 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request['name'];
        // $product->description = $request['description'];
        $product->category = $request['category'];
        $product->price = $request['price'];
        // $product->sell_price = $request['sell_price'];
        $product->qty = $request['qty'];
        // $product->qty_type = $request['qty_type'];
        if ($request->hasFile("product_image")) {
            Storage::delete("public/images/product_image/" . $product->product_image);
            $filenameWithExtension = $request->file("product_image")->getClientOriginalName();
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            $entension = $request->file("product_image")->getClientOriginalExtension();

            $nameToStore = $filename . "_" . time() . "." . $entension;
            $path = $request->file("product_image")->storeAs("public/images/product_image", $nameToStore);
            $product->product_image = $nameToStore;
        }
        $product->save();
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect("/products")->with('success', "Product Deleted successfully");
    }

    public function changeproductstatus(Request $request)
    {
        dd($request->id);
        $product = Product::find($request->id);
        $product->status = $request->status;
        $product->save();
        return response()->json(['success' => 'Product status change successfully.']);
    }
}
