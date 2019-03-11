<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCommonRequest;
use App\Setting;
use App\Text;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = Setting::where('type','common')->get()->keyBy('title');

        return view('admin.common.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommonRequest $request)
    {
        foreach ($request->all()['data'] as $id => $item){
            if(!is_array($item) || !isset($item['value'])) continue;

            if(!is_object($item['value'])) {
                Setting::where('title', $item['title'])->update(['value' => $item['value']]);
            }else{
                $item['value'] = url('/'.$item['value']->store('imgs'));

                $model = Setting::where('title', $item['title'])->first();
                $model->tryDelOldImg();
                $model->value = $item['value'];
                $model->update();
            }
        }

        return back();
    }

    public function get()
    {
        $settings = Setting::where('type','common')->get()->pluck('value', 'title')->toArray();

        $settings['texts'] = Text::all()->pluck('text', 'text_id')->toArray();
        $settings['stripe'] = Setting::where('title','currency')
            ->orWhere('title','stripe_publish_key')
            ->get()
            ->pluck('value', 'title');

        return response()->json($settings );
    }
}
