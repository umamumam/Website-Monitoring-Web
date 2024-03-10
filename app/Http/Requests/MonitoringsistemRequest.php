<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonitoringsistemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
			'namaweb' => 'required',
			'linkweb' => 'required',
			'kategori' => 'required',
			'tampilanui' => 'required',
			'responsifbutton' => 'required',
			'cms' => 'required',
			'jeniscms' => 'required',
			'bahasapemrograman' => 'required',
			'franework' => 'required',
			'jenisframework' => 'required',
			'webserver' => 'required',
			'jeniswebserver' => 'required',
        ];
    }
}
