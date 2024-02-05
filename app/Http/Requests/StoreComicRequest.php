<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "titolo"=>"required|string|min:2|max:100",
            "descrizione"=>"required|string|max:1000",
            "immagine"=>"required|url|string|max:500",
            "prezzo"=>"required|numeric|",
            "data_uscita"=>"required|date",
            "serie"=>"required|string|max:100",
            "tipo"=>"required|string|max:100",
        ];
    }
    public function messages(){
        return[
            "immagine.url" =>"l' url inserito non è corretto",
            "titolo.min" =>"il titolo inserito deve essere almeno :min caratteri",
            "prezzo.numeric"=>" il prezzo non è un numero",
        ];
    }
}
