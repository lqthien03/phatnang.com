<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoVideotRequest extends FormRequest
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
        $seo_video_id = $this->video->id;
        return [
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048' . $seo_video_id,
            'tittle' => 'required|string|unique:seo_videos,tittle,' . $seo_video_id,
            'keyword' => 'required|string|unique:seo_videos,keyword,' . $seo_video_id,
            'description' => 'required|string|unique:seo_videos,description,' . $seo_video_id,
        ];
    }
}
