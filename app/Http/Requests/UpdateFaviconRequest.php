<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaviconRequest extends FormRequest
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
        $favicon_id = $this->favicon->id;
        // dd($logo_id);
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $favicon_id,
            'display' => 'integer|integer|unique:favicons,display,' . $favicon_id,
        ];
    }
}
