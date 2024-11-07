<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url|max:255',
            'image' => 'nullable|image|max:2048',
            'github_url' => 'nullable|url|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:draft,in_progress,completed',
            'category_id' => 'required|exists:categories,id',
            'technologies' => 'nullable|string'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può superare i 255 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'url.url' => 'L\'URL del progetto deve essere valido',
            'image.image' => 'Il file deve essere un\'immagine',
            'image.max' => 'L\'immagine non può superare i 2MB',
            'github_url.url' => 'L\'URL di GitHub deve essere valido',
            'end_date.after_or_equal' => 'La data di fine deve essere successiva o uguale alla data di inizio',
            'status.required' => 'Lo stato è obbligatorio',
            'status.in' => 'Lo stato selezionato non è valido',
            'category_id.required' => 'La categoria è obbligatoria',
            'category_id.exists' => 'La categoria selezionata non esiste'
        ];
    }
}
