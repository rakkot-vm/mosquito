<?php

namespace App\Http\Controllers;

use App\AttributeValue;
use App\Http\Requests\AttributeValuesStoreRequest;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
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
    public function create(int $attr_id)
    {
        $attributeValue = new AttributeValue();
        $attributeValue->attribute_id = $attr_id;

        return view('admin.attributeValues.create', compact('attributeValue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeValuesStoreRequest $request)
    {
        $attributeValue = new AttributeValue();
        $attributeValue->fill($request->all());

        $attributeValue->preview_img = is_object($request['preview_img']) ?  url('/'.$request['preview_img']->store('imgs')) : '' ;
        $attributeValue->border_img = is_object($request['border_img']) ?  url('/'.$request['preview_img']->store('imgs')) : '' ;

        $attributeValue->save();

        return redirect( route('attributeValues.show', ['id' => $attributeValue->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AttributeValue  $attributeValues
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeValue $attributeValues)
    {
        return redirect(route('products.show', ['id' => 1]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributeValue $attributeValue)
    {
        return view('admin.attributeValues.edit', compact('attributeValue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeValuesStoreRequest $request, AttributeValue $attributeValue)
    {
        $attributeValue->fill($request->all());

        $attributeValue->preview_img = is_object($request['preview_img']) ?
            $this->updateFile($request['preview_img'], $attributeValue->preview_img, 'imgs') :
            $attributeValue->preview_img;

        $attributeValue->border_img = is_object($request['border_img']) ?
            $this->updateFile($request['border_img'], $attributeValue->border_img, 'imgs') :
            $attributeValue->border_img;

        $attributeValue->update();

        return redirect( route('attributeValues.show', ['id' => $attributeValue->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AttributeValue  $attributeValue
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(AttributeValue $attributeValue)
    {
        $attributeValue->delete();

        return back();
    }
}
