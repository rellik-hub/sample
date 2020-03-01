@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                <h3>SCHEDULE MANAGEMENT
                        <div class="pull-right">
                                <a href="{{route('schedule_ctrl.create')}}" class="btn btn-primary">CREATE SCHEDULE</a>
                                    </div>
                </h3>
            </div>
            <div class="module-body">


                    <div class="control-group">
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Section:</td>
                                    <td>Semester</td>
                                    <td>Year</td>
                                    <td>ACTION</td>
                                </tr>
                            </thead>
                                     
                            <tbody>
                                
                                @foreach($data as $key => $value)
                                    <tr class="odd">
                                        <td>{{$key += 1}}</td>
                                        <td>{{ $value->programme }}&nbsp;{{ $value->year_level }}</td>
                                        <td>{{ $value->semester}}</td>
                                        <td>{{ $value->year}}</td>

                                            <td>
                                                <form action="{{route('schedule_ctrl.destroy', $value->id)}}" method="POST">
                                                        <a class="btn btn-primary" href="{{route('schedule_ctrl.edit', $value->id)}}">EDIT</a>
                                                        <a class="btn btn-info" href="{{route('schedule_ctrl.show', $value->id)}}">VIEW</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type='submit' class="btn btn-danger">DELETE</button>
                                                </form>
                                            </td>
                                            
                                    </tr>
                                @endforeach

                            </tbody>

                         </table>
                         <ul class="pagination">
                             {{ $data->links() }}
                         </ul>
    
    
               
            </div>
        </div>

        
    
@endsection