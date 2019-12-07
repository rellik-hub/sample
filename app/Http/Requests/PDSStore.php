<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PDSStore extends FormRequest
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
            'cs_id' => 'required',
            'surname' => 'required',
            'first_name' => 'required',
            'middlename' => '',
            'name_extension' => '',
            'date_of_birth' => 'required',
            'sex' => '',
            'civil_status' => '',
            'citizenship' => '',
            'height' => '',
            'weight' => '',
            'bloodtype' => '',
            'gsis_id_no' => '',
            'pag_ibig_no' => '',
            'philhealth_no' => '',
            'sss_no' => '',
            'residential_address' => '',
            'residential_zip_code' => '',
            'residential_telephone_no' => '',
            'permanent_address' => '',
            'permanent_zip_code' => '',
            'permanent_telephone_no' => '',
            'e_mail_address' => '',
            'cellphone_no' => '',
            'agency_employee_no' => '',
            'tin' => '',
            'colleges' => 'required',
            'department' => 'required',
            'specialization' => 'required'
        ];
    }

    public function messages() {
        return [
            'csid_no.require' => 'Accepts only numirec value!',
            'csid_no.max' => 'This field is required!',
        ];
    }
}
