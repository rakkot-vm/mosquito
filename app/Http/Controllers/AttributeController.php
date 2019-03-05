<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Http\Requests\AttributesStoreRequest;
use Nexmo\Network\Number\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('products.show', ['id' => 1]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        $attribute = new Attribute();
        $attribute->product_id = $product_id;

        return view('admin.attributes.create', compact('attribute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributesStoreRequest $request)
    {
        $attribute = (new Attribute());
        $attribute->fill($request->all());
        $attribute->save();

        return redirect(route('attributes.show', ['id' => $attribute->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('products.show', ['id' => 1]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  (Attribute $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(AttributesStoreRequest $request, Attribute $attribute)
    {
        $attribute->fill($request->all());
        $attribute->update();

        return redirect(route('attributes.show', ['id' => $attribute->id]));
    }

    /**
     * Remove the specified resource from storage.
     * @param Attribute $attribute
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return redirect(route('products.show', ['id' => 1]));
    }
}
