<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerRequest extends FormRequest
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
        $banner_id = $this->banner->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $banner_id,
            'tittle' => 'required|string|unique:banners,tittle,' . $banner_id,
            'link' => 'required|string|unique:banners,link,' . $banner_id,
            'display' => 'integer|integer|unique:banners,display,' . $banner_id,

        ];
    }
}
