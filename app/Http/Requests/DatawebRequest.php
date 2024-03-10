<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatawebRequest extends FormRequest
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
			'kategori' => 'required',
			'weblayananinfo' => 'required',
			'webopdpemkot' => 'required',
			'webkecamatan' => 'required',
			'webkelurahan' => 'required',
			'websmp' => 'required',
			'websd' => 'required',
        ];
    }
}
