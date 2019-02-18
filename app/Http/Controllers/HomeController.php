<?php

namespace App\Http\Controllers;

use App\AccordionTab;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = Setting::where('type','home')->get()->keyBy('title')->all();

        return view('admin.home.edit', compact('settings'));
    }

    /**
     * Return home page settings
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $settings = Setting::select('id', 'title', 'value')
            ->where('type','home')
            ->with('accordionTabs')
            ->get();
        $settings = $this->cleanApiResponse($settings);

        return response()->json($settings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        foreach ($request->all() as $title => $field){
            if(!is_array($field)){
                Setting::where('title', $title)->update(['value' => $field]);
            }else{
                $this->accordionTabs($field);
            }
        }

        $this->saveFiles($request);

        return back()->with('success', 'Setting has been updated');
    }

    private function accordionTabs($field)
    {
        foreach($field as $id => $fields){
            if(!empty($fields['tab_id'])) {
                $accTab = AccordionTab::find($fields['tab_id']);
                $accTab->fill($fields);
                $accTab->update();
            }else if(!empty($fields['del_id'])){
                $this->destroyAccTab($id);
            }else{
                $accTab = new AccordionTab();
                $accTab->fill($fields);
                $accTab->save();
            }

        }
    }

    private function saveFiles($request)
    {
        foreach ($request->allFiles() as $title => $file){
            if(is_array($file)) continue;

            $setting = (new Setting())->where('title', $title)->first();
            $setting->saveImgs($file);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAccTab($id)
    {
        AccordionTab::find($id)
            ->delete();
    }

    private function cleanApiResponse($settings)
    {
        $settings = $settings->mapWithKeys(function($item){
            $title = $item['title'];
            $accordionTabs = $item['accordionTabs'];

            $item = [$item['title'] => [
                'id' => $item['id'],
                'value' => $item['value'],
            ]];

            if($accordionTabs->isNotEmpty()){
                $accordionTabs = $accordionTabs->mapWithKeys(function($tab){
                    return [[
                        'sort' => $tab['sort'],
                        'title' => $tab['title'],
                        'img' => $tab['img'],
                        'imgAlt' => $tab['imgAlt'],
                        'imgTitle' => $tab['imgTitle'],
                        'text' => $tab['text'],
                    ]];
                });

                $item[$title]['accordionTabs'] = $accordionTabs;
            }

            return $item;
        });

        return $settings;
    }
}
