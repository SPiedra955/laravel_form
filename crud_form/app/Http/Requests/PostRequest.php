<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            
            'titulo' => 'required|string|min:3|max:50',
            'extracto' => 'required|string|min:3|max:50',
            'contenido' => 'required|min:3|string|max:100',
            'caducable' => 'required|in:true,false',
            'comentable' => 'required|in:true,false',
            'acceso' => 'required|in:privado,publico',
                
        ];
    }
}
