@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>ROOM MANAGEMENT
					<div class="pull-right">
						<a href="{{route('room_ctrl.create')}}" class="btn btn-primary">ADD ROOM</a>
							</div>
				</h3>
            </div>
            <div class="module-body">

               
				  <div class="control-group">
                            <table id="room_table" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display" width="100%">
									<thead>
										<tr>
											<th><strong>#</strong></th>
											<th><strong>ROOM NO</strong></th>
											<th><strong>CLASSIFICATION</strong></th>
											<th><strong>CAPACITY</strong></th>
											<th><strong>ACTION</strong></th>
										</tr>
									</thead>
									<tbody>
												@foreach($rooms as $room)
													<tr>
													<td>{{ ++$i}}</td>
													<td>{{ $room->room_no }}</td>
													<td>{{ $room->room_classification}}</td>
													<td>{{ $room->room_capacity}}</td>
														<td>
															<form action="{{route('room_ctrl.destroy', $room->id)}}" method="POST">
																	<a class="btn btn-primary"href="{{route('room_ctrl.edit', $room->id)}}">EDIT</a>
																	<a class="btn btn-info" href="{{route('room_ctrl.show', $room->id)}}">VIEW</a>
																@csrf
																@method('DELETE')
																<button type='submit' class="btn btn-danger">DELETE</button>
															</form>
														</td>
														
													</tr>
													
												@endforeach
												
									</tbody> 
									
								</table>
									
						</div>
						
			</div>
			
        </div>
		
        <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

        <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/frontend_css/bootstrap.min.js')}}"></script>
	<script type="text/javascript">$('#room_table').DataTable();</script>
	
@endsection