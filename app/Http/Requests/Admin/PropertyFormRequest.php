<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'surface' => ['required', 'integer', 'min:10'],
            'rooms' => ['required', 'integer', 'min:1'],
            'bedrooms' => ['required', 'integer', 'min:0'],
            'floor' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'integer', 'min:0'],
            'city' => ['required', 'string', 'min:3'],
            'address' => ['required', 'min:8'],
            'postal_code' => ['required', 'min:4'],
            'sold' => ['required', 'boolean'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'title.min' => 'Le titre doit contenir au moins :min caractères.',
        
            'description.required' => 'La description est obligatoire.',
            'description.min' => 'La description doit contenir au moins :min caractères.',
        
            'surface.required' => 'La surface est obligatoire.',
            'surface.integer' => 'La surface doit être un nombre entier.',
            'surface.min' => 'La surface doit être d\'au moins :min m².',
        
            'rooms.required' => 'Le nombre de pièces est obligatoire.',
            'rooms.integer' => 'Le nombre de pièces doit être un nombre entier.',
            'rooms.min' => 'Le nombre de pièces doit être d\'au moins :min.',
        
            'bedrooms.required' => 'Le nombre de chambres est obligatoire.',
            'bedrooms.integer' => 'Le nombre de chambres doit être un nombre entier.',
            'bedrooms.min' => 'Le nombre de chambres ne peut pas être négatif.',
        
            'floor.required' => 'L\'étage est obligatoire.',
            'floor.integer' => 'L\'étage doit être un nombre entier.',
            'floor.min' => 'L\'étage ne peut pas être négatif.',
        
            'price.required' => 'Le prix est obligatoire.',
            'price.integer' => 'Le prix doit être un nombre entier.',
            'price.min' => 'Le prix ne peut pas être négatif.',
        
            'city.required' => 'La ville est obligatoire.',
            'city.string' => 'La ville doit être une chaîne de caractères.',
            'city.min' => 'Le nom de la ville doit contenir au moins :min caractères.',
        
            'address.required' => 'L\'adresse est obligatoire.',
            'address.min' => 'L\'adresse doit contenir au moins :min caractères.',
        
            'postal_code.required' => 'Le code postal est obligatoire.',
            'postal_code.min' => 'Le code postal doit contenir au moins :min caractères.',
        
            'sold.required' => 'Le statut de vente est obligatoire.',
            'sold.boolean' => 'Le statut de vente doit être vrai ou faux.',
        ];
    }
}
