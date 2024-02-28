<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use Illuminate\Http\Request;

class CommercialController extends Controller
{
    //
    public function index(){
        $devis = Devi::orderBy('created_at','desc')->get();
        return view('commercial.dashboard-commercial',compact('devis'));
    }
    public function showDetailDevis($id){
        $devis = Devi::find($id);
        return view('commercial.modal-show-detail-devis',compact('devis'));
    }
}
