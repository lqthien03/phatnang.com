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
            'image' => 'required|string|unique:level1_products,image,' . $category1_id,
            'tittle' => 'required|string|unique:level1_products,tittle,' . $category1_id,
            'outstand' => 'required|string|unique:level1_products,outstand,' . $category1_id,
            'display' => 'required|string|unique:level1_products,display,' . $category1_id,
            'level2_product_id' => 'required|string|unique:level1_products,level2_product_id,' . $category1_id,
            'seo_id' => 'required|string|unique:level1_products,seo_id,' . $category1_id,
            'describe' => 'required|string|unique:level1_products,describe,' . $category1_id,
        ];
    }
}
