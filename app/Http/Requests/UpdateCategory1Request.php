<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory1Request extends FormRequest
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
        $category1_id = $this->category_level1->id;

        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'tittle' => 'required|string|unique:level1_products,tittle,' . $category1_id,
            'outstand' => 'integer|unique:level1_products,outstand,' . $category1_id,
            'display' => 'integer|unique:level1_products,display,' . $category1_id,
            'level2_product_id' => 'integer|unique:level1_products,level2_product_id,' . $category1_id,
            'seo_id' => 'integer|unique:level1_products,seo_id,' . $category1_id,
            'describe' => 'required|string|unique:level1_products,describe,' . $category1_id,
        ];
    }
}
