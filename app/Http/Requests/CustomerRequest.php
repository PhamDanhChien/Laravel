<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'id' => 'required|integer|min:130|max:140'
        ];
    }

    public function message()
    {
        return [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là số nguyên',
                'min' => ':attribute không được nhỏ hơn 130',
                'max' => ':attribute không được lớn hơn 140'
        ];
    }

    public function attreibutes()
    {
        return [
                'id' => 'Mã id khách hàng'
            ];
    }
}
