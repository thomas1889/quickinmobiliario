<?php

namespace QuickInmobiliario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class StoreProperty extends FormRequest
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
        $rules = [
          'name' => 'required',
          'phone' => 'required',
          'address' => 'required',
          'antiquity' => 'required',
          'state' => 'required',
          'zone' => 'required',
          'city' => 'required',
          'neighborhood' => 'required',
          'built_area' => 'required',
          'full_area' => 'required',
          'rooms' => 'required',
          'parkings' => 'required',
          'bathrooms' => 'required',
          'stratum' => 'required',
          'floors' => 'required',
          'price' => 'required',
          'property_type_id' => 'required',
          'use_type_id' => 'required',
          'business_type_id' => 'required',
          'description' => 'required',
          'commission' => 'required',
          'video360' => 'string',
          'features' => 'filled|array'
        ];

        if(!empty($this->request->get('images'))){
          $images = $this->request->get('images');
          foreach($images as $key => $val) {
            $rules['images.'.$key] = ['regex:/(.png|.jpg|.jpeg|.gif)/'];
          }
        }

        return $rules;
    }

    /**
     * {@inheritdoc}
     */
    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
