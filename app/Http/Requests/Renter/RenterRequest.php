<?php

namespace App\Http\Requests\Renter;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class RenterRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nama_perusahaan' => 'required|string',
            'alamat' => 'required|string',
            'nama_penyewa' => 'required|string',
            'alamat_penyewa' => 'required|string',
            'nik' => 'required|string',
            'pekerjaan' => 'required|string',
            'password' => ['required'],
        ];
    }
}
