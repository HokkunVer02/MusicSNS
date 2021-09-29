<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
        return [
            'post.title' => 'required|string|max:100',
            'post.content' => 'required|string|max:4000',
        ];
    }
}