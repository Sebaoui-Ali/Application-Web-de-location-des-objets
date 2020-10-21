<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    protected function validator(array $data)
    {
        return Validator::make($data, [

        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view(' Back.userslist', ['users' => User::where('is_admin', 0)->orderbydesc('created_at')->paginate(10)]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.profile', [
            'user' => User::findorFail($id),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showuser($id)
    {
        return view('user.maindash', [
            'user' => User::findorFail($id),
        ]);
    }

    public function showtable($id)
    {
        return view('user.tableannonce', [
            'user' => User::findorFail($id),
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
        //dd($request->all());die();
        $user = User::findorFail($id);
        $user->update($request->all());
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        User::destroy($id);

        $message = 'User bien desactivé';
        return redirect()->back()->withMessage($message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editimg()
    {
        return view('user.profileimage', [
            'user' => User::findorFail(Auth::user()->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateimg(Request $request)
    {

        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/images/users/' . $filename));

            $user = Auth::user();
            $user->image = "/images/users/" . $filename;
            $user->save();
        }

        return redirect()->route('home');
    }

    public function changepas()
    {
        return view('user.changepas');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        if (!(Hash::check($request->get('oldpas'), Auth::user()->password))) {
            return back()->with('error', 'Votre Mot de passe est invalide');
        }
        if (strcmp($request->get('oldpas'), $request->get('newpas')) == 0) {
            return back()->with("error", " Le mot de passe ne doit pas être le même que l'ancien ");
        }
        $request->validate([
            'newpas' => ['required', 'required_with:password_confirmation', 'same:password_confirmation'],
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('newpas'));
        $user->save();
        return redirect()->route('home')->with('message', 'Votre mot de passe a été bien modifié ');
    }

}
