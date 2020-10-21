<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Category;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAnnonce;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'search', 'list']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annonces.index', ['annonces' => Annonce::orderbydesc('date_fin_premium')->paginate(9)]);
    }
    public function index2()
    {

        return view('Back.annonceliste', ['annonces' => Annonce::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('annonces.create', ['categories' => Category::with('sous_categories')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnnonce $request)
    {

        $annonce = new Annonce();

        if ((request()->has('image1')) && (request()->has('image2')) && (request()->missing('image3')) && (request()->missing('image4'))) {

            $imageupload1 = request()->file('image1');
            $imagename1 = time() . '1.' . $imageupload1->getClientOriginalExtension();
            $imagepath1 = public_path('/images/annonces/');
            $imageupload1->move($imagepath1, $imagename1);

            $imageupload2 = request()->file('image2');
            $imagename2 = time() . '2.' . $imageupload2->getClientOriginalExtension();
            $imagepath2 = public_path('/images/annonces/');
            $imageupload2->move($imagepath2, $imagename2);

            $annonce->image1 = "/images/annonces/" . $imagename1;
            $annonce->image2 = "/images/annonces/" . $imagename2;

            $annonce->user_id = Auth::user()->id;
            $annonce->prix = $request->input('prix');
            $annonce->caution = $request->input('caution');
            $annonce->etat_annonce = $request->input('etat_annonce');
            $annonce->description = $request->input('description');

            if ($request->input('cas_premium') == 'semaine') {
                $annonce->date_fin_premium = now()->addDays(7);
            } elseif ($request->input('cas_premium') == 'gratuit') {
                $annonce->date_fin_premium = now()->addDays(-1);
            } elseif ($request->input('cas_premium') == '15j') {
                $annonce->date_fin_premium = now()->addDays(15);
            } elseif ($request->input('cas_premium') == 'mois') {
                $annonce->date_fin_premium = now()->addMonths(1);
            }

            $annonce->debut = $request->input('debut');
            $annonce->fin = $request->input('fin');
            $annonce->titre = $request->input('titre');
            $annonce->categorie = $request->input('categorie');
            $annonce->Ville = $request->input('Ville');

        } else if ((request()->has('image1')) && (request()->has('image2')) && (request()->has('image3')) && (request()->missing('image4'))) {
            $imageupload1 = request()->file('image1');
            $imagename1 = time() . '1.' . $imageupload1->getClientOriginalExtension();
            $imagepath1 = public_path('/images/annonces/');
            $imageupload1->move($imagepath1, $imagename1);

            $imageupload2 = request()->file('image2');
            $imagename2 = time() . '2.' . $imageupload2->getClientOriginalExtension();
            $imagepath2 = public_path('/images/annonces/');
            $imageupload2->move($imagepath2, $imagename2);

            $imageupload3 = request()->file('image3');
            $imagename3 = time() . '3.' . $imageupload3->clientExtension();
            $imagepath3 = public_path('/images/annonces/');
            $imageupload3->move($imagepath3, $imagename3);

            $annonce->image1 = "/images/annonces/" . $imagename1;
            $annonce->image2 = "/images/annonces/" . $imagename2;
            $annonce->image3 = "/images/annonces/" . $imagename3;

            $annonce->user_id = Auth::user()->id;
            $annonce->prix = $request->input('prix');
            $annonce->caution = $request->input('caution');
            $annonce->etat_annonce = $request->input('etat_annonce');
            $annonce->description = $request->input('description');
            $annonce->Ville = $request->input('Ville');

            $annonce->debut = $request->input('debut');
            $annonce->fin = $request->input('fin');
            if ($request->input('cas_premium') == 'semaine') {
                $annonce->date_fin_premium = now()->addDays(7);
            } elseif ($request->input('cas_premium') == 'gratuit') {
                $annonce->date_fin_premium = now()->addDays(-1);
            } elseif ($request->input('cas_premium') == '15j') {
                $annonce->date_fin_premium = now()->addDays(15);
            } elseif ($request->input('cas_premium') == 'mois') {
                $annonce->date_fin_premium = now()->addMonths(1);
            }
            $annonce->titre = $request->input('titre');
            $annonce->categorie = $request->input('categorie');
        } else if ((request()->has('image1')) && (request()->has('image2')) && (request()->has('image3')) && (request()->has('image4'))) {
            $imageupload1 = request()->file('image1');
            $imagename1 = time() . '1.' . $imageupload1->getClientOriginalExtension();
            $imagepath1 = public_path('/images/annonces/');
            $imageupload1->move($imagepath1, $imagename1);

            $imageupload2 = request()->file('image2');
            $imagename2 = time() . '2.' . $imageupload2->getClientOriginalExtension();
            $imagepath2 = public_path('/images/annonces/');
            $imageupload2->move($imagepath2, $imagename2);

            $imageupload3 = request()->file('image3');
            $imagename3 = time() . '3.' . $imageupload3->getClientOriginalExtension();
            $imagepath3 = public_path('/images/annonces/');
            $imageupload3->move($imagepath3, $imagename3);

            $imageupload4 = request()->file('image4');
            $imagename4 = time() . '4.' . $imageupload4->getClientOriginalExtension();
            $imagepath4 = public_path('/images/annonces/');
            $imageupload4->move($imagepath4, $imagename4);

            $annonce->image1 = "/images/annonces/" . $imagename1;
            $annonce->image2 = "/images/annonces/" . $imagename2;
            $annonce->image3 = "/images/annonces/" . $imagename3;
            $annonce->image4 = "/images/annonces/" . $imagename4;
            $annonce->user_id = Auth::user()->id;
            $annonce->prix = $request->input('prix');
            $annonce->caution = $request->input('caution');
            $annonce->debut = $request->input('debut');
            $annonce->fin = $request->input('fin');
            $annonce->etat_annonce = $request->input('etat_annonce');
            $annonce->description = $request->input('description');
            $annonce->debut = $request->input('debut');
            $annonce->fin = $request->input('fin');
            $annonce->Ville = $request->input('Ville');

            if ($request->input('cas_premium') == 'semaine') {
                $annonce->date_fin_premium = now()->addDays(7);
            } elseif ($request->input('cas_premium') == 'gratuit') {
                $annonce->date_fin_premium = now()->addDays(-1);
            } elseif ($request->input('cas_premium') == '15j') {
                $annonce->date_fin_premium = now()->addDays(15);
            } elseif ($request->input('cas_premium') == 'mois') {
                $annonce->date_fin_premium = now()->addMonths(1);
            }
            $annonce->titre = $request->input('titre');
            $annonce->categorie = $request->input('categorie');

        } else {
            return $request;
            $annonce->image1 = '';
            $annonce->image2 = '';
            $annonce->image3 = '';
            $annonce->image4 = '';
        }
        $annonce->save();

        $message = 'Annonce bien ajouté ' . Auth::user()->nom;
        return redirect('/')->withMessage($message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('annonces.show', [
            'annonce' => Annonce::findorFail($id),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function list($nom) {

        return view('annonces.showcat', [
            'annonce' => Annonce::where('categorie', $nom)->orderbydesc('date_fin_premium')->paginate(9),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.annonce', [
            'annonce' => Annonce::findorFail($id),
        ]);
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
        $annonce = Annonce::findorFail($id);
        $annonce->update($request->all());
        return redirect()->route('home');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        // $request->validate([
        //     'search' => 'required|min:3',
        // ]);
        $search = $request->get('search');
        $annonces = DB::table('annonces')->where('titre', 'like', "%$search%")->where('deleted_at', null)
            ->orWhere('description', 'like', "%$search%")->where('deleted_at', null)
            ->orWhere('Ville', 'like', "%$search%")->where('deleted_at', null)
            ->paginate(9);
        return view('annonces/index', ['annonces' => $annonces]);

    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Annonce::destroy($id);
        return redirect()->back();
    }

}
