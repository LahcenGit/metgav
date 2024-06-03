<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index(){
        $settings = Setting::orderBy('created_at','desc')->get();
        return view('admin.settings',compact('settings'));
    }

    public function create(){
        return view('admin.add-setting');
    }

    public function store(Request $request){
        $setting = new Setting();
        $setting->name = $request->name;
        $setting->value_1 = $request->value_1;
        $setting->value_2 = $request->value_2;
        $setting->value_3 = $request->value_3;
        $setting->save();
        return redirect('/editeur/settings');
    }

    public function edit($id){
        $setting = Setting::find($id);
        return view('admin.edit-setting',compact('setting'));
    }

    public function update(Request $request , $id){
        $setting = Setting::find($id);
        $setting->name = $request->name;
        $setting->value_1 = $request->value_1;
        $setting->value_2 = $request->value_2;
        $setting->value_3 = $request->value_3;
        $setting->save();
        return redirect('/editeur/settings');
    }
}
