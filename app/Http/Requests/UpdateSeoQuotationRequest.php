<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoQuotationRequest extends FormRequest
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
        $seo_quotation_id = $this->quotation->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $seo_quotation_id,
            'tittle' => 'required|string|unique:seo_news,tittle,' . $seo_quotation_id,
            'keyword' => 'required|string|unique:seo_news,keyword,' . $seo_quotation_id,
            'description' => 'required|string|unique:seo_news,description,' . $seo_quotation_id,
        ];
    }
}
