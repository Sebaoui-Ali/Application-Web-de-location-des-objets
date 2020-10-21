<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        DB::connection()->enableQueryLog();
        $categories = Category::with('sous_categories')->get();
        return view('annonces.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //


    //

    public function store(Request $request){
        $category = new category();
        $category->nom = $request->input('nom');
        $category->save();
       $message='Categorie bien ajouté';
       return redirect('/admin/listecat')->withMessage($message);

    }


    public function Addcat(){
        return view('back.Addcat');

    }

    /**
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       return view('back.categoryedit',['edit_category' =>Category::findOrFail($id)]);
   }


    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request,$id)
   {
       $this->validate($request,[
           'nom'=>'required|max:25'
       ]);
       $category = Category::findorFail($id);
       $category->update($request->all());
       $message='Categorie bien modifié';
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
        Category::destroy($id);
        $request->session()->flash('status', 'Post was Deleted !!!');
        $message='Categorie bien supprimé';
        return redirect()->back()->withMessage($message);
    }
}
