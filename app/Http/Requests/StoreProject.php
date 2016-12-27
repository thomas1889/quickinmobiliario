<?php

namespace QuickInmobiliario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class StoreProject extends FormRequest
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
          'name' => 'required',
          'address' => 'required',
          'phone' => 'required',
          'description' => 'required',
          'built_area' => 'required',
          'full_area' => 'required',
          'zone' => 'required',
          'city' => 'required',
          'neighborhood' => 'required'
        ];
    }
    /**
     * {@inheritdoc}
     */
    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
