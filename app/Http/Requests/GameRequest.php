<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            //
            'title' => 'required|string|unique:games,title',
            'description' => 'nullable|string',
            'join_phase_length' => 'required|numeric|min:1|max:10',
            'variant' => 'required|string|exists:variants,name',
        ];
    }
}
