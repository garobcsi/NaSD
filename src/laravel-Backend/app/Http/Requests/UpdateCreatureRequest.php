<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreatureRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "money"=> ['required','min:0','integer'],
            "health"=> ['required','min:0','max:100','integer'],
            "mood"=> ['required','min:0','max:100','integer'],
            "energy"=> ['required','min:0','max:100','integer'],
            "cleanness"=> ['required','min:0','max:100','integer']
        ];
    }
}
