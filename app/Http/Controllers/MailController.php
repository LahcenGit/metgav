<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    //
    public function index(){
      return view('devis');
    }

    public function sendEmail(Request $request){

      $request->validate([

        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'entreprise' => 'required|string|max:255',
        'product' => 'required|string|max:255',
        'detail' => 'string',
        'file_one' => 'required|mimes:jpeg,jpg,png,pdf|max:5120',
        'file_two' => 'required|mimes:jpeg,jpg,png,pdf|max:5120',

      ]);


      $data["email"] = "lahcenebenmouloud@gmail.com";
      $data["title"] = "Demande de devis depuis metgav.dz";

      $data["first_name"] = $request->first_name;
      $data["last_name"] = $request->last_name;
      $data["phone"] = $request->phone;
      $data["entreprise"] = $request->entreprise;
      $data["product"] = $request->product;
      $data["detail"] = $request->detail;

      $file1 =  $request->file('file_one');
      $file2 =  $request->file('file_two');

    


      $destination = 'public/images/identity-pro';
      $filename1 = $data["entreprise"]. '-'.uniqid() . '.' . $file1->getClientOriginalExtension();
      $file1->storeAs($destination , $filename1);
      $file1 = public_path('storage/images/identity-pro/'. $filename1);

      $filename2 = $data["entreprise"]. '-'.uniqid() . '.' . $file2->getClientOriginalExtension();
      $file2->storeAs($destination , $filename2);
      $file2 = public_path('storage/images/identity-pro/'. $filename2);




      Mail::send('mail.contact', $data, function($message)use($data,$file1,$file2) {

          $message->to($data["email"], $data["email"])
                  ->subject($data["title"]);
              $message->attach($file1);
              $message->attach($file2);
      });


      return redirect('/success-send')->with('success', 'Nous avons bien reçu votre demande de devis et nous allons la traiter dès que possible.');
    }
}
