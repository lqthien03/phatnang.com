<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
        $setting_id = $this->setting->id;
        
        return [
            'tittle' => 'required|string|unique:settings,tittle,' . $setting_id,
            'address' => 'required|string|unique:settings,address,' . $setting_id,
            'name' => 'required|string|unique:settings,name,' . $setting_id,
            'email' => 'required|string|unique:settings,email,' . $setting_id,
            'holine' => 'required|string|unique:settings,holine,' . $setting_id,
            'zalo' => 'required|string|unique:settings,zalo,' . $setting_id,
            'phone' => 'required|string|unique:settings,phone,' . $setting_id,
            'website' => 'required|string|unique:settings,website,' . $setting_id,
            'fanpage' => 'required|string|unique:settings,fanpage,' . $setting_id,
            'map' => 'required|string|unique:settings,map,' . $setting_id,
            'link' => 'required|string|unique:settings,link,' . $setting_id,
            'time' => 'required|string|unique:settings,time,' . $setting_id,
            'product_number' => 'required|string|unique:settings,product_number,' . $setting_id,
            'related_product_number' => 'required|string|unique:settings,related_product_number,' . $setting_id,
            'posts' => 'required|string|unique:settings,posts,' . $setting_id,
            'related_posts' => 'required|string|unique:settings,related_posts,' . $setting_id,
            'map_iframe' => 'required|string|unique:settings,map_iframe,' . $setting_id,
            'gg_analytic' => 'required|string|unique:settings,gg_analytic,' . $setting_id,
            'gg_webmaster_tool' => 'required|string|unique:settings,gg_webmaster_tool,' . $setting_id,
            'head_js' => 'required|string|unique:settings,head_js,' . $setting_id,
            'body_js' => 'required|string|unique:settings,body_js,' . $setting_id,
        ];
    }
}
