<?php

namespace App\Http\Requests\Expenditure;

use Illuminate\Foundation\Http\FormRequest;

class ExpenditureRequest extends FormRequest
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
            'tag' => 'required|string',
            'tujuan' => 'required|string|max:100',
            'keterangan' => 'required|string|max:100',
            'total_biaya' => 'required|numeric',
        ];
    }
}
