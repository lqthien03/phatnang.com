<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImageHomeRequest extends FormRequest
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
        $image_home = $this->image_home->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $image_home,
            'display' => 'integer|integer|unique:home_images,display,' . $image_home,
        ];
    }
}
