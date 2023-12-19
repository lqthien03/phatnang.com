<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIntroduceRequest extends FormRequest
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
        $introduce_id = $this->introduce->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $introduce_id,
            'tittle' => 'required|string|unique:introduces,tittle,' . $introduce_id,
            'display' => 'integer|integer|unique:introduces,display,' . $introduce_id,
            'content' => 'required|string|unique:introduces,tittle,' . $introduce_id,
            'keyword' => 'required|string|unique:introduces,keyword,' . $introduce_id,
            'description' => 'required|string|unique:introduces,description,' . $introduce_id,
            'seo_id' => 'integer|unique:introduces,seo_id,' . $introduce_id,
        ];
    }
}
