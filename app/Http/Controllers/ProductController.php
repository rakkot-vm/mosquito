<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Product;
use Illuminate\Http\Request;

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
        $data['attributes'] = Attribute::all();
        $data['product'] = new Product;
        return $this->responseType('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product = Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'img' => !empty($request->img) ? time() .'-'. $request->img->getClientOriginalName() : '',
        ]);


        if($product){
            return $this->responseType('admin.products.show', $product);
        }

//        return $this->responseType('admin.products.show', ['error' => 'Product id '.$id.' not found'], 422);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($product = Product::where('id',$id)->with('attributes')->first()){
            return $this->responseType('admin.products.show', $product);
        }

        return $this->responseType('admin.products.show', ['error' => 'Product id '.$id.' not found'], 422);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
