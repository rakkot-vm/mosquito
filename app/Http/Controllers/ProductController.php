<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($products = Product::all()){
            return $this->responseType('admin.products.index', $products);
        }

        return $this->responseType('admin.products', ['error' => 'Products not found'], 422);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = (new Product());

        return view('admin.products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product = (new Product());
        $product->fill($request->all());
        $product->img = is_object($request['img']) ? $request['img']->store('imgs') : '';

        return view('admin.products.show', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id)->with('attributes')->get()->first();

        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)
            ->with('attributes')
            ->get()
            ->first();

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductStoreRequest  $request
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductStoreRequest $request, Product $product)
    {
        $product->fill($request->all());
        $product->img = is_object($request['img']) ? $this->updateImg($request['img'], $product->img, 'imgs') : $product->img;
        $product->update();

        return view('admin.products.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'));
    }

    /**
     * Return product for api
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        try {
            $product = Product::findOrFail($id)->with('attributes')->get()->first();
        } catch (ModelNotFoundException $ex) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        return response()->json($product);
    }
}
