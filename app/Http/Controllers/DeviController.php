<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use Illuminate\Http\Request;

class DeviController extends Controller
{
    //
    public function index(){
        return view('devis');
    }
    public function store(Request $request){

        $request->validate([

          'first_name' => 'required|string|max:255',
          'last_name' => 'required|string|max:255',
          'phone' => 'required|string|max:255|unique:devis',
          'email' => 'required|string|max:255|unique:devis',
          'entreprise' => 'required|string|max:255',
          'product' => 'required|string|max:255',
          'file_one' => 'required|mimes:jpeg,jpg,png,pdf|max:5120',
          'file_two' => 'required|mimes:jpeg,jpg,png,pdf|max:5120',

        ]);

        $devis = new Devi();
        $devis->email = $request->email;
        $devis->first_name = $request->first_name;
        $devis->last_name = $request->last_name;
        $devis->phone = $request->phone;
        $devis->entreprise = $request->entreprise;
        $devis->products = $request->product;
        $devis->details = $request->detail;

        $file1 =  $request->file('file_one');
        $file2 =  $request->file('file_two');

        $destination = 'public/images/identity-pro';
        $filename1 = $devis->entreprise. '-'.uniqid() . '.' . $file1->getClientOriginalExtension();
        $file1->storeAs($destination , $filename1);
        $file1 = public_path('storage/images/identity-pro/'. $filename1);
        $devis->RC = $filename1;

        $filename2 = $devis->entreprise. '-'.uniqid() . '.' . $file2->getClientOriginalExtension();
        $file2->storeAs($destination , $filename2);
        $file2 = public_path('storage/images/identity-pro/'. $filename2);
        $devis->NIF = $filename2;

        $devis->save();
        return redirect('/success-send')->with('success', 'Nous avons bien reçu votre demande de devis et nous allons la traiter dès que possible.');
      }

      public function editStatus($id){
        $devis = Devi::find($id);
        return view('commercial.modal-edit-status',compact('devis'));
      }

      public function updateStatus($id , Request $request){
        $devis = Devi::find($id);
        $devis->status = $request->status;
        $devis->save();
        return true;
      }
}
