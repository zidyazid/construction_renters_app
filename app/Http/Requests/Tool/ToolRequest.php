<?php

namespace App\Http\Requests\Tool;

use Illuminate\Foundation\Http\FormRequest;

class ToolRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_alat' => 'required|string',
            'tipe' => 'required|string',
            // 'status' => 'required|string',
            'jumlah_ketersedian' => 'required|numeric',
            'kondisi' => 'required|string',
            'file' => 'required|image|mimes:png,jpg',
        ];
    }
}
