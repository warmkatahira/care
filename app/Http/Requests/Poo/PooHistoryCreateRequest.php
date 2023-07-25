<?php

namespace App\Http\Requests\Poo;

use Illuminate\Foundation\Http\FormRequest;

class PooHistoryCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'poo_date' => 'required|date',
            'poo_time' => 'required',
            'memo' => 'nullable|max:255',
            'poo_status_id' => 'required|exists:poo_statuses,poo_status_id',
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attributeは必須です。",
            'max' => ":attributeは:max文字以内で入力して下さい。",
            'date' => ":attributeは日付で入力して下さい。",
            'exists' => ":attributeが正しくありません。",
        ];
    }

    public function attributes()
    {
        return [
            'poo_date' => '「ひづけ」',
            'poo_time'   => '「じかん」',
            'memo'   => '「めも」',
            'poo_status_id'   => '「うんちのじょうたい」',
        ];
    }
}
