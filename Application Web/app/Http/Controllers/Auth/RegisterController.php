<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'username' => ['required', 'string', 'max:30', 'unique:users'],
            'image' => ['sometimes','image', 'mimes:jpeg,png,jpg,gif,bmp,svg', 'max:5000'], // 5Mo
            'tel' => ['required','max:14','unique:users','min:10'],
            'code_postal' => ['required','max:9','min:4'],
            'genre' => ['required'],
            'ville' => ['required'],
            'nom' => ['required','min:3'],
            'prenom' => ['required','min:3'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(request()->has('image')){
            $imageupload = request()->file('image');
            $imagename = time().'.'. $imageupload->getClientOriginalExtension();
            $imagepath = public_path('/images/users/');
            $imageupload->move($imagepath, $imagename);
            return User::create([
                'nom' => $data['nom'],
                'prenom' => $data['prenom'],
                'genre' => $data['genre'],
                'username' => $data['username'],
                'tel' => $data['tel'],
                'ville' => $data['ville'],
                'code_postal' => $data['code_postal'],
                'email' => $data['email'],
                'image' => '/images/users/'.$imagename,
                'password' => Hash::make($data['password']),
                'etat_compte' => '1',
            ]);
        }
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'genre' => $data['genre'],
            'username' => $data['username'],
            'tel' => $data['tel'],
            'ville' => $data['ville'],
            'code_postal' => $data['code_postal'],
            'email' => $data['email'],
            'image' => '/images/users/default.jpg',
            'password' => Hash::make($data['password']),
            'etat_compte' => '1',
        ]);
    }
}
