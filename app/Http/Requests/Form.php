<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property int    $phone
 * @property string $message
 */
class Form extends FormRequest
{
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
            'name' => ['required', 'max:255'],
            'phone'  => ['required', 'digits_between:1,255', 'numeric'],
            'message' => ['required'],
        ];
    }
}
