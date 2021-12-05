<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'feeling' => 'required|integer',
            'note' => 'sometimes|max:200',
        ];
    }

    public function messages()
    {
        return [
            'feeling.required' => '現在の気分を選択してください',
            'feeling.integer' => '無効な値です',
            'note.max' => '200文字以内でご記入ください',
        ];
    }
}
