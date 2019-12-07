@extends('layouts.admin_layout')

@section('content')
				<div class="span9">
					<div class="content" style="float:align-left">
						<div class="module-head">
								<ul style="float:right;"class="breadcrumb">
										<li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
										<li><a href="/admin/table">Faculty Management</a> <span class="divider">/</span></li>
										<li class="active">Edit Faculty</li>
									  </ul>
							<a href="/admin/table" class="btn btn-primary">&laquoBACK</a>
						</div>
						<div id="header" class="module">
							<div class="module-head">
								<h3>PERSONAL DATA SHEET</h3>
							</div>
							<div class="module-body">

								
							<form  class="form-horizontal row-fluid" method="POST" action="{{route('pds.update', $data->id )}}">
                            @csrf				
                            @method('PATCH')
	<!----------------------------NAME------------------------------------------------>
	
	<div class="header">
		<h3>EDIT FACULTY</h3>
	  </div>
									<div class="control-group">
										<table>

											<tr>
											
												<label class="control-label" for="basicinput" style="margin:5px">CS ID:</label>
													<div class="controls" style="margin:5px">
                                                    <input type="text" id="basicinput" placeholder="" value="{{ $data->cs_id}}" name="cs_id" class="form-control input-lg span5", required>
													@error('cs_id')
															<span style="color:red !important;">{{ $message }}</span>
														@enderror
													</div>
											</tr>

											<tr>
											
											<label class="control-label" for="basicinput" style="margin:5px">SURNAME:</label>
											<div class="controls" style="margin:5px">
                                            <input type="text" id="basicinput" placeholder="" value="{{ $data->surname}}" name="surname" class="form-control input-lg span5",  >
												@error('surname')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
											</tr>

											<tr>
											<label class="control-label" for="basicinput" style="margin:5px">FIRST NAME:</label>
											<div class="controls" style="margin:5px">
                                            <input type="text" id="basicinput"  placeholder="" value="{{ $data->first_name}}" name="first_name" class="form-control input-lg span5",  >
												@error('first_name')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
											</tr>

											<tr>
											<label class="control-label" for="basicinput" style="margin:5px">MIDDLE NAME:</label>
											<div class="controls" style="margin:5px">
                                            <input type="text" id="basicinput" placeholder="" value="{{ $data->middle_name}}" name="middle_name" class="form-control input-lg span5">
												
											</div>
											</tr>

											<tr>
											<label class="control-label" for="basicinput" style="margin:5px">NAME EXTENSION:</label>
											<div class="controls" style="margin:5px">
                                            <input type="text" id="basicinput" placeholder="" value="{{ $data->name_extension}}" name="name_extension" class="form-control input-lg span2">
												
											</div>
											</tr>
								
										</table>

		<!--------------------DATE/ SEX/ CIVIL STATUS/ CITIZENSHIP/ -------------------->
									<table>
										<tr>
										
									
										<div class="control-group">
										<label class="control-label" for="basicinput" style="margin:5px">DATE OF BIRTH:</label>
											<div class="controls"style="margin:1px">
												<select tabindex="1" data-placeholder="Select here.." value="{{ $data->month}}" name="month" class="form-control input-lg span2",  >
													<option value="january">January</option>
													<option value="february">February</option>
													<option value="march">March</option>
													<option value="april">April</option>
													<option value="may">May</option>
													<option value="june">June</option>
													<option value="july">July</option>
													<option value="august">August</option>
													<option value="september">September</option>
													<option value="october">October</option>
													<option value="november">November</option>
													<option value="december">December</option>
												</select>

												<select tabindex="1" data-placeholder="Select here.." value="{{ $data->day}}" name="day" class="form-control input-lg span1",  >
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>

												<select tabindex="1" data-placeholder="Select here.." value="{{ $data->year}}" name="year" class="form-control input-lg span2",  >
													<option value="1960">1960</option>
													<option value="1961">1961</option>
													<option value="1962">1962</option>
													<option value="1963">1963</option>
													<option value="1964">1964</option>
													<option value="1965">1965</option>
													<option value="1966">1966</option>
													<option value="1967">1967</option>
													<option value="1968">1968</option>
													<option value="1969">1969</option>
													<option value="1970">1970</option>
													<option value="1971">1971</option>
													<option value="1972">1972</option>
													<option value="1973">1973</option>
													<option value="1974">1974</option>
													<option value="1975">1975</option>
													<option value="1976">1976</option>
													<option value="1977">1977</option>
													<option value="1978">1978</option>
													<option value="1979">1979</option>
													<option value="1980">1980</option>
													<option value="1981">1981</option>
													<option value="1982">1982</option>
													<option value="1983">1983</option>
													<option value="1984">1984</option>
													<option value="1985">1985</option>
													<option value="1986">1986</option>
													<option value="1987">1987</option>
													<option value="1988">1988</option>
													<option value="1989">1989</option>
													<option value="1990">1990</option>
													<option value="1991">1991</option>
													<option value="1992">1992</option>
													<option value="1993">1993</option>
													<option value="1994">1994</option>
													<option value="1995">1995</option>
													<option value="1996">1996</option>
													<option value="1997">1997</option>
													<option value="1998">1998</option>
													<option value="1999">1999</option>
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002</option>
													<option value="2003">2003</option>
													<option value="2004">2004</option>
													<option value="2005">2005</option>
													<option value="2006">2006</option>
													<option value="2007">2007</option>
													<option value="2008">2008</option>
													<option value="2009">2009</option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
																						
			
												</select>
												@error('date_of_birth')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
										</tr>

										<tr>
										<label class="control-label" for="basicinput" style="margin:5px">SEX:</label>
											<div class="controls" style="margin:5px">
												<select tabindex="1" data-placeholder="Select here.." value="{{ $data->sex}}" name="sex" class="form-control input-lg span2",  >
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
												@error('sex')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
										</tr>			

										<tr>
										<label class="control-label" for="basicinput" style="margin:5px">CIVIL STATUS:</label>
											<div class="controls" style="margin:5px">
												<select tabindex="1" data-placeholder="Select here.." value="{{ $data->civil_status}}" name="civil_status" class="form-control input-lg span2",  >
													<option value="single">Single</option>
													<option value="married">Married</option>
													<option value="annulled">Annulled</option>
													<option value="widowed">Widowed</option>
													<option value="separated">Separated</option>
													<option value="others">Others</option>
												</select>
												@error('civil_status')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
										</tr>

										<tr>
										<label class="control-label" for="basicinput" style="margin:5px">CITIZENSHIP:</label>
										<div class="controls" style="margin:5px">
										<input type="text" id="basicinput" placeholder="" value="{{ $data->citizenship}}" name="citizenship" class="form-control input-lg span4",  >
												@error('citizenship')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
										</div>
										</tr>

										<tr>
											<label class="control-label" for="basicinput" style="margin:5px">HEIGHT (m):</label>
											<div class="controls" style="margin:5px">
											<input type="text" id="basicinput" placeholder="" value="{{ $data->height}}" name="height" class="form-control input-lg span4",  >
												@error('height')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
										</tr>

										<tr>
											<label class="control-label" for="basicinput" style="margin:5px">WEIGHT (kg):</label>
											<div class="controls" style="margin:5px">
											<input type="text" id="basicinput" placeholder="" value="{{ $data->weight}}" name="weight" class="form-control input-lg span4",  >
												@error('weight')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
										</tr>

										<tr>
											<label class="control-label" for="basicinput" style="margin:5px">BLOOD TYPE:</label>
											<div class="controls" style="margin:5px">
											<input type="text" id="basicinput" placeholder="" value="{{ $data->bloodtype}}" name="blood_type" class="form-control input-lg span4",  >
												@error('bloodtype')
													<span style="color:red !important;">{{ $message }}</span>
												@enderror
											</div>
										</tr>

										

									</div>
								

									</table>
										

				<!------------------form 2--------------->						
										<table>
											<tr>
												<label class="control-label" for="basicinput" style="margin:4px">GSIS ID NO:</label>
													 <div class="controls" style="margin:5px">
														<input type="text" id="basicinput" placeholder="" value="{{ $data->gsis_id_no}}" name="gsis_id_no" class="form-control input-lg span5",  >
														@error('gsis_id_no')
															<span style="color:red !important;">{{ $message }}</span>
														@enderror
													 </div>
											</tr>
					
											<tr>
												<label class="control-label" for="basicinput" style="margin:4px">PAG-IBIG ID NO:</label>
													<div class="controls" style="margin:5px">
													   <input type="text" id="basicinput" placeholder="" value="{{ $data->pag_ibig_id_no}}" name="pag_ibig_id_no" class="form-control input-lg span5",  >
													   @error('pag_ibig_id_no')
															<span style="color:red !important;">{{ $message }}</span>
														@enderror
													</div>
										   </tr>
					
											<tr>
												 <label class="control-label" for="basicinput" style="margin:4px">PHILHEALTH NO:</label>
													<div class="controls" style="margin:6px">
													   <input type="text" id="basicinput" placeholder="" value="{{ $data->philhealth_no}}" name="philhealth_no" class="form-control input-lg span5",  >
													   @error('philhealth_no')
															<span style="color:red !important;">{{ $message }}</span>
														@enderror
													</div>
										   </tr>
					
										   <tr>
																
												 <label class="control-label" for="basicinput" style="margin:4px">SSS NO:</label>
													 <div class="controls" style="margin:6px">
														 <input type="text" id="basicinput" placeholder="" value="{{ $data->sss_no}}" name="sss_no" class="form-control input-lg span5",  >
														 @error('sss_no')
															<span style="color:red !important;">{{ $message }}</span>
														 @enderror
													 </div>
											 </tr>
						
												<tr>
																
													<label class="control-label" for="basicinput" style="margin:4px">RESIDENTIAL ADDRESS:</label>
														<div class="controls" style="margin:5px">
															<input type="text" id="basicinput" placeholder="" value="{{ $data->residential_address}}" name="residential_address" class="form-control input-lg span7",  >
															@error('residential_address')
															<span style="color:red !important;">{{ $message }}</span>
															@enderror
														</div>
													<label class="control-label" for="basicinput" style="margin:4px">ZIP CODE:</label>
														<div class="controls" style="margin:6px">
															<input type="text" id="basicinput" placeholder="" value="{{ $data->residential_zip_code}}" name="residential_zip_code" class="form-control input-lg span2">
															@error('residential_zip_code')
															<span style="color:red !important;">{{ $message }}</span>
															@enderror
														</div>
													<label class="control-label" for="basicinput" style="margin:4px">TELEPHONE NO:</label>
														<div class="controls" style="margin:6px">
															<input type="text" id="basicinput" placeholder="" value="{{ $data->residential_telephone_no}}" name="residential_telephone_no" class="form-control input-lg span3">
															
														</div>
												</tr>
					
												<tr>
																
														<label class="control-label" for="basicinput" style="margin:4px">PERMANENT ADDRESS:</label>
															<div class="controls" style="margin:5px">
																<input type="text" id="basicinput" placeholder="" value="{{ $data->permanent_address}}" name="permanent_address" class="form-control input-lg span7",  >
																@error('permanent_address')
																	<span style="color:red !important;">{{ $message }}</span>
																@enderror
															</div>
														<label class="control-label" for="basicinput" style="margin:4px">ZIP CODE:</label>
															<div class="controls" style="margin:6px">
																<input type="text" id="basicinput" placeholder="" value="{{ $data->permanent_zip_code}}" name="permanent_zip_code" class="form-control input-lg span2",  >
																@error('permanent_zip_code')
																	<span style="color:red !important;">{{ $message }}</span>
																@enderror
															</div>
														<label class="control-label" for="basicinput" style="margin:4px">TELEPHONE NO:</label>
															<div class="controls" style="margin:6px">
																<input type="text" id="basicinput" placeholder="" value="{{ $data->permanent_telephone_no}}" name="permanent_telephone_no" class="form-control input-lg span3">
															</div>
													 </tr>
					
											</div>
										</table>


<!------------------form 3-------------------->
										<table>
											<tr>
												<label class="control-label" for="basicinput" style="margin:4px">E-MAIL ADDRESS:</label>
												<div class="controls" style="margin:6px">
													<input type="text" id="basicinput" placeholder="" value="{{ $data->e_mail_address}}" name="e_mail_address" class="span5"  >
													@error('e_mail_address')
														<span style="color:red !important;">{{ $message }}</span>
													@enderror
												</div>
										 </tr>
					
										 <tr>
												<label class="control-label" for="basicinput" style="margin:4px">CELLPHONE NO (if any):</label>
												<div class="controls" style="margin:6px">
													<input type="text" id="basicinput" placeholder="" value="{{ $data->cellphone_no}}" name="cellphone_no" class="span5">
												</div>
										 </tr>
					
										 <tr>
												<label class="control-label" for="basicinput" style="margin:4px">AGENCY EMPLOYEE NO:</label>
												<div class="controls" style="margin:6px">
													<input type="text" id="basicinput" placeholder="" value="{{ $data->agency_employee_no}}" name="agency_employee_no" class="span5",  >
													@error('agency_employee_no')
														<span style="color:red !important;">{{ $message }}</span>
													@enderror
												</div>
										 </tr>
					
										 <tr>
												<label class="control-label" for="basicinput" style="margin:4px">TIN:</label>
												<div class="controls" style="margin:6px">
													<input type="text" id="basicinput" placeholder="" value="{{ $data->tin}}" name="tin" class="span5",  >
													@error('tin')
														<span style="color:red !important;">{{ $message }}</span>
													@enderror
												</div>
										 </tr>
												 
										 <tr>
											<label class="control-label" for="basicinput" style="margin:5px">COLLEGES:</label>
												<div class="controls" style="margin:5px">
													<select tabindex="1" data-placeholder="" value="{{ $data->colleges}}" name="colleges" class="form-control input-lg span2",  >
														<option value="CTAS">CTAS</option>
														<option value="CTE">CTE</option>
														<option value="CFMS">CFMS </option>
													</select>
													@error('colleges')
														<span style="color:red !important;">{{ $message }}</span>
													@enderror
												</div>
											</tr>

											<tr>
												<label class="control-label" for="basicinput" style="margin:5px">DEPARTMENT:</label>
												<div class="controls" style="margin:5px">
												<input type="text" id="basicinput" placeholder="" value="{{ $data->department}}" name="department" class="form-control input-lg span4",  >
													@error('department')
														<span style="color:red !important;">{{ $message }}</span>
													@enderror
												</div>
											</tr>

											<tr>
												<label class="control-label" for="basicinput" style="margin:5px">SPECIALIZATION:</label>
												<div class="controls" style="margin:5px">
												<input type="text" id="basicinput" placeholder="" value="{{ $data->specialization}}" name="specialization" class="form-control input-lg span4",  >
													@error('specialization')
														<span style="color:red !important;">{{ $message }}</span>
													@enderror
												</div>
											</tr>

										 <tr>
											<div class="control-group">
												<div class="controls">
													 <button type="submit" name="submit" class="btn btn-primary">Update</button>
												 </div>
											</div>
										</tr> 
					
											</div>
										</table>
					
					
								</form>
							</div>
						</div>

						
						
	
@endsection