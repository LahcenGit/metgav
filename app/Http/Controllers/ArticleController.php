<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ArticleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('admin.add-article');
    }

    public function store(Request $request){
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->date = $request->date;
        $article->slug = str::slug($request->title);
        $article->save();
        $hasFile = $request->hasFile('photo');
        $hasFileTwo = $request->hasFile('photos');
        if($hasFile){
                $destination = 'public/images/articles';
                $path = $request->file('photo')->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link = $storageName;
                $image->type = 1;
                $article->images()->save($image);
            }
        // secondary images
        if($hasFileTwo){
            foreach($request->file('photos') as $file){
                $destination = 'public/images/articles';
                $path = $file->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link = $storageName;
                $image->type = 2;
                $article->images()->save($image);
            }
        }
     return redirect()->back();
    }


}
