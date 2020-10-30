<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        $cont = Contact::all();
        return view('contact.index', ['data'=> $cont]);
    }

    public function create(){
        return view('contact.create');
    }

    public function store(){
        $query = request()->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'tel'=>'required',
            'email'=>'required|email',
            'entreprise'=>'required',
            'poste'=>'required',
            'pays'=>'required',
            'ville'=>'required',
        ]);
        Contact::create($query);
        return redirect('contact');
    }

    public function show($id){
        $id = Contact::find($id);
        return view('contact.show',compact('id'));
    }

    public function edit(Contact $id){
    
        return view('contact.edit', compact('id'));
    }

    public function update(Contact $id){
        $query = request()->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'tel'=>'required',
            'email'=>'required|email',
            'entreprise'=>'required',
            'poste'=>'required',
            'pays'=>'required',
            'ville'=>'required',
        ]);
        $id->update($query);
        return redirect('contact');
    }

    public function destroy(Contact $id){
        $id->delete();
        return redirect('contact');
    }

    // public function search(Request $request){
    //     $q = $request->get('q');
    //     $query = Contact::where('nom', 'like,', "%$q%");
    //     // $query = Contact::where('nom','like',"%$q%")
    //     //         ->orwhere('poste', 'like',"%$q%")
    //     //         ->orwhere('ville', 'like', "%$q%");
    //     return view('contact.index',['data'=> $query]);
    // }
}
