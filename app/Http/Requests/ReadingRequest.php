<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReadingRequest extends FormRequest
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
            'bookName' => 'required|string|min:2',
            'autor' => 'required|string|max:25',
            'editor' => 'required|integer|max_digits:1', 
            'year' => 'required|integer|max_digits:4|min_digits:4',
            'img' => 'required|image'
        ];
    }

    public function messages() :array
    {
        return [
            //regole bookName
            'bookName.required' => 'Inserisci un titolo',
            'bookName.string' => 'Devi inserire una stringa per quanto riguarda il nome del libro',
            'bookName.min' => 'Deve essere almeno di 2 caratteri',
            //regole autor
            'autor.required' => 'Inserisci il tuo/vostro nome',
            'autor.string' => 'Devi inserire una stringa per quanto riguarda il nome di autore',
            'autor.max' => 'Non può essere maggiore di 25 caratteri',
            //regole editor
            'duration.required' => 'Inserisci editore',
            'duration.string' => 'Devi inserire una stringa per quanto riguarda il nome di editore',
            'duration.maxNon può essere maggiore di 25 caratteri' => 'Non può essere maggiore di 25 caratteri',
            //regole year
            'year.required' => 'Inserisci l\'anno',
            'year.integer' => 'L\'anno deve corrispendere ad un numero',
            'year.max_digits' => 'inserisci un anno valido formato da 4 cifre',
            'year.min_digits' => 'inserisci un anno valido formato da 4 cifre',
            //regole img
            'img.required' => 'Questo campo immagine è obbligatorio!', 
            'img.image' => 'Inserisci un\'immagine in formato: jpg, jpeg, png, bmp, gif, svg, webp'
        ];
    }
}
