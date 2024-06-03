<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $actualites = Actualite::limit(6)->orderByDesc('date')->get();
        $settings = Setting::all();
        return view('welcome-new',compact('actualites','settings'));
    }
}
