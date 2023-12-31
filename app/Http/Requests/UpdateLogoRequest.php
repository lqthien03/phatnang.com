<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLogoRequest extends FormRequest
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
        $logo_id = $this->logo->id;
        // dd($logo_id);
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $logo_id,
            'display' => 'integer|integer|unique:logos,display,' . $logo_id,
        ];
    }
}
