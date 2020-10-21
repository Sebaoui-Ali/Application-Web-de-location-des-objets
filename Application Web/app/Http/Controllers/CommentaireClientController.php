<?php

namespace App\Http\Controllers;

use App\CommentaireClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.commentaireClient');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id,$annonce)
    {
        $comm= CommentaireClient::where('annonce_id',$annonce)->where('user_id',Auth::user()->id)->where('user_id_client',$id)->exists();
        if($comm){
            $message="Vous avez déjà fait un commentaire";
            return redirect()->route('reservations')->withMessage($message);
        }
        else{
            $com = new CommentaireClient();
            $com->note = $request->input('note');
            $com->message = $request->input('message');
            $com->user_id = Auth::user()->id;
            $com->annonce_id = $annonce;
            $com->user_id_client = $id;
            $com->save();
            return redirect('/mesreservation');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentaireClient  $commentaireClient
     * @return \Illuminate\Http\Response
     */
    public function show(CommentaireClient $commentaireClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentaireClient  $commentaireClient
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentaireClient $commentaireClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentaireClient  $commentaireClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentaireClient $commentaireClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentaireClient  $commentaireClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentaireClient $commentaireClient)
    {
        //
    }
}
