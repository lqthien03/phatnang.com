<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoNewstRequest extends FormRequest
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
        $seo_news_id = $this->news->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $seo_news_id,
            'tittle' => 'required|string|unique:seo_news,tittle,' . $seo_news_id,
            'keyword' => 'required|string|unique:seo_news,keyword,' . $seo_news_id,
            'description' => 'required|string|unique:seo_news,description,' . $seo_news_id,
        ];
    }
}
