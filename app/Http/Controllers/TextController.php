<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::all();

        return view('admin.texts.index', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $text = new Text();

        return view('admin.texts.create', compact('text'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $text = new Text();
        $text->fill($request->all());

        $text->save();

        return redirect(route('texts.index', ['id' => $text->id]))->with('success', 'Text has been create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        return view('admin.texts.show', compact('text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        return view('admin.texts.edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        $text->fill($request->all());

        $text->update();

        return redirect(route('texts.index', ['id' => $text->id]))->with('success', 'Text has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        $text->delete();

        return redirect(route('texts.index'))->with('success', 'Text has been delete');
    }

    public function getAll()
    {
        $texts = Text::all();

        return response()->json($texts);
    }

    public function getByType(string $type)
    {
        $texts = Text::where('type', $type)->get();

        return response()->json($texts);
    }

    public function getByTextId(string $text_id = '')
    {
        $text = Text::where('text_id', $text_id)->first();

        return response()->json($text);
    }
}
