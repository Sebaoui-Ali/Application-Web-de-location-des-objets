<?php

namespace App\Http\Controllers;

use App\Category;
use App\SousCategory;
use Illuminate\Http\Request;

class SousCategoryController extends Controller
{

    protected $guarded = [];

    public function index()
    {
        $list = SousCategory::all();
        return view('annonces.create', ['sous_categories' => $list]);
    }

    public function index2()
    {

        return view('back.listesouscat', ['cat' => SousCategory::orderbydesc('created_at')->paginate(10)]);
    }
    public function create($id)
    {
        return view('back.ajoutersouscat', ['souscategory' => Category::findOrFail($id)]);
    }

    public function store(Request $request, $id)
    {
        $scategory = new SousCategory();
        $scategory->nom = $request->input('nom');
        $scategory->category_id = $id;
        $scategory->save();
        $message = 'Sous Category bien ajouté';
        return redirect('/admin/listecat')->withMessage($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        SousCategory::destroy($id);
        $message = 'Sous Category bien supprimé';
        return redirect()->back()->withMessage($message);
    }
}
