<?php

namespace App\Http\Requests\Weight;

use Illuminate\Foundation\Http\FormRequest;

class WeightHistoryCreateRequest extends FormRequest
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
            'weight_date' => 'required|date|unique:weight_histories,weight_date',
            'weight' => 'required|numeric|min:0.1',
            'memo' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attributeは必須です。",
            'max' => ":attributeは:max文字以内で入力して下さい。",
            'min' => ":attributeは:min以上で入力して下さい。",
            'date' => ":attributeは日付で入力して下さい。",
            'numeric' => ":attributeは数値で入力して下さい。",
            'unique' => ":attributeは既に登録されています。",
        ];
    }

    public function attributes()
    {
        return [
            'weight_date' => '「ひづけ」',
            'weight'   => '「たいじゅう」',
            'memo'   => '「めも」',
        ];
    }
}
