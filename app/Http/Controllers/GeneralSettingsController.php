<?php

namespace App\Http\Controllers;

use App\Order;
use App\Setting;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $settings = Setting::where('type','general')->get()->all();

        return view('admin.generalSettings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model = Setting::where('title', $request->title)->first();
        $model->value = $request->value;
        $model->update();

        return back();
    }

    /**
     * Return home page settings
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $settings = Setting::where('title','currency')
            ->orWhere('title','stripe_publish_key')
            ->get()
            ->pluck('value', 'title');

        return response()->json($settings);
    }
}
