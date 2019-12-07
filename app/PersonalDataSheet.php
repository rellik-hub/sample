<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PersonalDataSheet extends Model
{

    //Table 
    protected $table = "personaldatasheet";

    protected $fillable = [
        'cs_id', 'surname', 'first_name', 'middlename', 'name_extension',
'month', 'day', 'year', 'sex', 'civil_status', 'citizenship', 'height', 'weight', 
'bloodtype', 'gsis_id_no', 'pag_ibig_id_no', 'philhealth_no', 'sss_no', 
'residential_address', 'residential_zip_code', 'residential_telephone_no', 
'permanent_address', 'permanent_zip_code', 'permanent_telephone_no', 
'e_mail_address', 'cellphone_no', 'agency_employee_no', 'tin', 'colleges',
 'department', 'specialization' ];

}
