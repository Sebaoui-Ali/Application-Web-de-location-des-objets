<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('index');
    }
    public function store(Request $request)
    {

        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $con = Contact::where('id', $id)->update(['status' => 0]);
        return redirect()->route('listemsg');
    }
}
