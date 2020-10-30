<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class SearchController extends Controller
{
    public function index(Request $req){
        $q = $req->get('q');
        if ($q != "") {
            $contact = Contact::where('nom', 'LIKE', '%'.$q.'%')
                    ->orwhere('poste','LIKE', '%'.$q.'%')
                    ->orwhere('ville','LIKE', '%'.$q.'%')
                    ->get();
            return view('contact.index', ['data'=> $contact]);
        }
        else {
            return redirect('contact');
        }
        
    }
}
