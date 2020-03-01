
@extends('layouts.admin_layout')

@section('content')
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FACULTY MANAGEMENT
									<div class="pull-right">
										<a href="form" class="btn btn-primary">ADD FACULTY</a> 
									</div>
								</h3>
							</div>
							<div class="module-body">
						
						


							<div class="control-group">
								<table id="faculty_table" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 	display" width="100%">
									<thead>
										
										<tr>
											<th>#</th>
											<th>CSID NO</th>
											<th>COLLEGE</th>
											<th>NAME</th>
											<th>SPECIALIZATION</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
											@foreach($data as $key => $value)
												<tr>
												<td>{{$key += 1}}</td>
												<td>{{ $value->cs_id }}</td>
												<td>{{ $value->colleges}}</td>
												<td>{{ $value->first_name}}&nbsp;{{ $value->surname}} </td>
												<td>{{ $value->specialization}}</td>
													<td>
														<form action="{{route('pds.destroy', $value->id)}}" method="POST">
																<a class="btn btn-primary" href="{{route('pds.edit', $value->id)}}">EDIT</a>
																<a class="btn btn-info" href="{{route('pds.show', $value->id)}}">VIEW</a>
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-danger">DELETE</button>
														</form>
														</td>
													
												</tr>
											@endforeach
									</tbody> 
									
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous"></script>

	<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('css/frontend_css/bootstrap.min.js')}}"></script>
<script type="text/javascript">$('#faculty_table').DataTable();</script>

	




@endsection