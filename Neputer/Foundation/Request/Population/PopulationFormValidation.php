<?php


namespace Neputer\Foundation\Request\Population;


use Illuminate\Foundation\Http\FormRequest;

class PopulationFormValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'first_name' => 'required | max:15 ',
            'middle_name' => 'max:15 ',
            'last_name' => 'required | max:15 ',
            'date_of_birth' => 'required | before:today',
            'age' => 'required',
            'sex' => 'required',
            'phone'=>'max:15 | min:10',
            'state' => 'required',
            'district' => 'required',
            'municipality' => 'required',
            'tole' => 'required',
            'ward_no' => 'required',
            'marital_status' => 'required',
            'education_level' => 'required',
            'present_location' => 'required',
            'citizenship_number'=> 'max:15',
            'file' => 'mimes:jpeg,png,jpg | required',
        ];
    }

}
