<?php

namespace App\Http\Requests\Meal;

use Illuminate\Foundation\Http\FormRequest;

class MealHistoryCreateRequest extends FormRequest
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
            'meal_date' => 'required|date',
            'meal_time' => 'required',
            'memo' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attributeは必須です。",
            'max' => ":attributeは:max文字以内で入力して下さい。",
        ];
    }

    public function attributes()
    {
        return [
            'meal_date' => '「ひづけ」',
            'meal_time'   => '「じかん」',
            'memo'   => '「めも」',
        ];
    }
}
