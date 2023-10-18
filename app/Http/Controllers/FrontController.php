<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function detailActualite($slug){
        $actualite = Actualite::where('slug',$slug)->first();
        $actualites = Actualite::where('slug','!=',$slug)->get();
        return view('actualite',compact('actualite','actualites'));
    }

    public function detailArticle($slug){
        $article = Article::where('slug',$slug)->first();
        $articles = Article::where('slug','!=',$slug)->get();
        return view('article',compact('article','articles'));
    }

    public function actualites(){
        $actualites = Actualite::orderByDesc('date')->get();
        return view('actualites',compact('actualites'));
    }
    public function articles(){
        $articles = Article::orderByDesc('date')->get();
        return view('articles',compact('articles'));
    }
}
