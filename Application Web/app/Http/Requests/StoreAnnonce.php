<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnonce extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image1' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,bmp,svg', 'max:5000'], // 5Mo
            'image2' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,bmp,svg', 'max:5000'], // 5Mo
            'image3' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,bmp,svg', 'max:5000'], // 5Mo
            'image4' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,bmp,svg', 'max:5000'],
            'titre' => 'required |string | min:2 | max:100',
            'description' => ['required', 'string', 'min:10'],
            'etat_annonce' => ['required'],
            'categorie' => ['required'],
            'cas_premium' => ['required'],
            'prix' => ['required', 'integer'],
            'caution' => ['required', 'integer'],
        ];
    }
    // public function messages(){
    //     return [
    //         'titre.min' => 'min de 4 lettre example  ',
    //     ];
    // }
}
