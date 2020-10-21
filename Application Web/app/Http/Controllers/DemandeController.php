<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Demande;
use App\Mail\infoclient;
use App\Mail\infopartenaire;
use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annonces.listenotiff', ['demandes' => Demande::where('user_id_partenaire', Auth::user()->id)->get()]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx($id)
    {
        return view('annonces.showClient', ['user' => User::findOrfail($id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $annonce = Annonce::find($id);
        $date_debut = $annonce->debut;
        $date_ffiin = $annonce->fin;

        if ($res = Reservation::where('annonce_id', $id)->where('etat_reserv', 1)->orderbydesc('fin_reserv')->first()) {
            $date_debutres = $res->debut_reserv;
            $date_finres = $res->fin_reserv;

            $request->validate([
                'debut' => 'required|after_or_equal:' . $date_debut . '|after:' . $date_finres . '',
                'fin' => 'required|Before_or_equal:' . $date_ffiin . '',
                'description' => 'required',
            ]);
        }

        $request->validate([

            'debut' => 'required|after_or_equal:' . $date_debut . '',
            'fin' => 'required |after:' . $date_debut . '|Before_or_equal:' . $date_ffiin . '',
            'description' => 'required',
        ]);
        $demande = new Demande();

        $demande->debut = $request->input('debut');
        $demande->fin = $request->input('fin');
        $demande->description = $request->input('description');
        $demande->user_id_client = Auth::user()->id;

        $demande->annonce_id = $id;
        $demande->user_id_partenaire = $annonce->user_id;
        // $annonce->user_id_partenaire =
        $demande->save();
        $message = 'Votre demande de location est envoyée veuillez patienter pour une réponse d’après le partenaire ';
        return redirect('/')->withMessage($message);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accepter($id)
    {
        $ac = Demande::where('id', $id)->update(['status' => 2]);
        $de = Demande::findorFail($id);
        $se = User::find($de->user_id_client);
        $pa = User::find($de->user_id_partenaire);
        $reservation = new Reservation();
        $reservation->debut_reserv = $de->debut;
        $reservation->fin_reserv = $de->fin;
        $reservation->user_id_client = $de->user_id_client;
        $reservation->user_id_partenaire = $de->user_id_partenaire;
        $reservation->annonce_id = $de->annonce_id;
        $reservation->annulation = now()->addDays(2);
        $reservation->save();
        Mail::to($pa->email)->send(new infoclient($se));
        Mail::to($se->email)->send(new infopartenaire($pa));
        return redirect('/listenotiff');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function refuser($id)
    {
        $re = Demande::where('id', $id)->update(['status' => 1]);
        return redirect('/listenotiff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ok($id)
    {
        $re = Demande::where('id', $id)->update(['status' => 10]);
        return redirect('/listenotiff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function okk($id)
    {
        $re = Demande::where('id', $id)->update(['etat' => 0]);
        return redirect('/listenotiff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function oka($id)
    {
        $re = Reservation::where('id', $id)->update(['etat_reserv' => 4]);
        return redirect('/listenotiff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
