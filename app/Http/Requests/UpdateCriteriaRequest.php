<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCriteriaRequest extends FormRequest
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
        $criteria_id = $this->criteria->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $criteria_id,
            'tittle' => 'required|string|unique:criterias,tittle,' . $criteria_id,
            'describe' => 'required|string|unique:criterias,describe,' . $criteria_id,
            'display' => 'integer|integer|unique:criterias,display,' . $criteria_id,
        ];
    }
}
