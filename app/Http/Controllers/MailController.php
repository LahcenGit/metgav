<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index(){
      return view('devis');
    }
    public function store(Request $request){
       // dd($request->file_one);
        $file_one = public_path($request->file_one);
        $mail = new MailContact($file_one);
        Mail::to('benosmanhind@gmail.com')->send($mail);
        return 1;
    }
}
