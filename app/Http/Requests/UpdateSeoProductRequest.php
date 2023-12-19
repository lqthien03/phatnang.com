<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoProductRequest extends FormRequest
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
        $seo_product_id = $this->product->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $seo_product_id,
            'tittle' => 'required|string|unique:seo_products,tittle,' . $seo_product_id,
            'keyword' => 'required|string|unique:seo_products,keyword,' . $seo_product_id,
            'description' => 'required|string|unique:seo_products,description,' . $seo_product_id,
        ];
    }
}
