@extends('layouts.admin_layout')

@section('content')
				<div class="span9">
					<div class="content" style="float:align-left">

						<div id="header" class="module">
							<div class="module-head">
                                    <ul style="float:right;"class="breadcrumb">
                                            <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                                            <li><a href="/admin/table">Faculty Management</a> <span class="divider">/</span></li>
                                            <li class="active">View Faculty</li>
                                          </ul>
								<a href="/admin/table" class="btn btn-primary">&laquoBACK</a>
							</div>
							<div class="module-body">

								
							<form  class="form-horizontal row-fluid mr-5" method="post" action="{{route('pds.show', $data->id )}}">
                            @csrf				
                            @method('POST')
	<!----------------------------NAME------------------------------------------------>
	
	
                            <div class="control-group">
                                        <div class="module-body table">
                                    <table cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                                        <thead>
                                                <tr><div class="header">
                                                        <h4>FACULTY INFORMATION</h4> 
                                                      </div></tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS ID:</td>
                                                <td>{{ $data->cs_id }}</td>
                                            </tr>

                                            <tr>
                                                <td>NAME:</td>
                                                <td>{{ $data->first_name }} {{ $data->middle_name }} {{ $data->surname }} {{ $data->name_extension }}</td>
                                            </tr>

                                            <tr>
                                                <td>DATE OF BIRTH:</td>
                                                <td>{{ $data->month }} / {{ $data->day }} / {{ $data->year }}</td>
                                            </tr>

                                            <tr>
                                                <td>SEX:</td>
                                                <td>{{ $data->sex }}</td>
                                            </tr>

                                            <tr>
                                                <td>CIVILSTATUS:</td>
                                                <td>{{ $data->civil_status }}</td>
                                            </tr>

                                            <tr>
                                                <td>CITIZENSHIP:</td>                                                      
                                                <td>{{ $data->citizenship }}</td>
                                            </tr>

                                            <tr>
                                                <td>HEIGHT:</td>                                                      
                                                <td>{{ $data->height }}</td>
                                            </tr>

                                            <tr>
                                                <td>WEIGHT:</td>                                                     
                                                <td>{{ $data->weight }}</td>
                                            </tr>

                                            <tr>
                                                <td>BLOODTYPE:</td>                                                      
                                                <td>{{ $data->bloodtype }}</td>
                                            </tr>

                                            <tr>
                                                <td>GSIS ID NO:</td>                                                       
                                                <td>{{ $data->gsis_id_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>PHILHEALTH NO:</td>                                                     
                                                <td>{{ $data->philhealth_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>SSS NO:</td>                                                      
                                                <td>{{ $data->sss_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>RESIDENTIAL ADDRESS:</td>                                                        
                                                <td>{{ $data->residential_address }}</td>
                                            </tr>

                                            <tr>
                                                <td>ZIP_CODE:</td>                                                     
                                                <td>{{ $data->residential_zip_code }}</td>
                                            </tr>

                                            <tr>
                                                <td>TELEPHONE NO:                                                     
                                                <td>{{ $data->residential_telephone_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>PERMANENT ADDRESS:</td>                                                      
                                                <td>{{ $data->permanent_address }}</td>
                                            </tr>

                                            <tr>
                                                <td>ZIP CODE:</td>                                                     
                                                <td>{{ $data->permanent_zip_code }}</td>
                                            </tr>

                                            <tr>
                                                <td>TELEPHONE NO:</td>                                                     
                                                <td> {{ $data->permanent_telephone_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>E-MAIL ADDRESS:</td>                                                      
                                                <td>{{ $data->e_mail_address }}</td>
                                            </tr>

                                            <tr>
                                                <td>CELLPHONE NO:</td>                                                      
                                                <td>{{ $data->cellphone_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>AGENCY EMPLOYEE NO:</td>                                                      
                                                <td>{{ $data->agency_employee_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>TIN:</td>                                                     
                                                <td> {{ $data->tin }}</td>
                                            </tr>

                                            <tr>
                                                <td>COLLEGES:</td>                                                      
                                                <td>{{ $data->colleges }}</td>
                                            </tr>

                                            <tr>
                                                <td>DEPARTMENT:</td>                                                       
                                                <td>{{ $data->department }}</td>
                                            </tr>

                                            <tr>
                                                <td>SPECIALIZATION:</td>                                                     
                                                <td>{{ $data->specialization }}</td>
                                            </tr>


                                        </tbody>
                                                
                                           
                                            
                                           
                                       
										</table>
					
					</div>
								</form>
							</div>
						</div>
                    </div>
						
						
	
@endsection