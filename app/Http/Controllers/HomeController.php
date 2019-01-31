<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!empty($request->type)){
            $settings = Setting::where('type',$request->type)->get();
            $error = $settings->count() > 0 ?: 'Setting with type: '.$request->type.' not found.';
        }else{
            $settings = Setting::all();
            $error = $settings->count() > 0 ?: 'Settings not foud';
        }

        if($settings->count() > 0){
            return $this->responseType('admin.settings.index', $settings);
        }

        Session::flash('warning', $error);
        return $this->responseType('admin.settings.index', ['error' => $error], 422);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Setting $setting)
    {
        $setting->setValue($request);

        $setting->type = $request->type;
        $setting->title = $request->title;

        if($setting->save()){
            return $this->responseType('admin.settings.show', $setting);
        }
        $error = 'Something wrong, setting has not been created';

        Session::flash('warning', $error);
        return $this->responseType('admin.settings.index', ['error' => $error], 422);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = Setting::where('type','home')->pluck('value', 'title');

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
        $settings = Setting::where('type','home');

        return response()->json($settings);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function AAedit(Setting $setting)
    {
        if($setting){
            return view('admin.settings.edit', compact('setting'));
        }

        return back()->with(['warning' => 'Setting not found']);
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
        if($setting->update($request->all())){
            return back()->with('success', 'Setting has been updated');
        }

        return back()->with('warning', 'Error, setting has not been updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param Setting $setting
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Setting $setting)
    {
        if($setting->delete()){
            return back()->with(['success' => 'The "'.$setting->title.'" setting has been removed']);
        }

        return back()->with(['warning' => 'Setting not found']);
    }
}
