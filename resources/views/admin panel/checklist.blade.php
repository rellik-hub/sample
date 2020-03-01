@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                <h3>CHECKLIST MANAGEMENT
                   
                        <div class="pull-right">
                                <a href="{{route('checklist_ctrl.create')}}" class="btn btn-primary">ADD CHECKLIST</a>
                                    </div>
                                    <div style="margin-right:15px;" class="pull-right">
                                        <a href="{{route('print_checklist')}}" class="btn btn-success">PRINT</a>
                                            </div>
                </h3>
            </div>
            <div class="module-body">
				

                    <div class="control-group">
                        <table id="checklist_table" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display" width="100%">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>PROGRAMME</td>
                                    <td>YEAR LEVEL</td>
                                    <td>SEMESTER</td>
                                    <td>CURRICULUM</td>
                                    <td>ACTION</td>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                                @foreach($data as $key => $value)
                                <tr class="odd">
                                    <td>{{$key += 1}}</td> 
                                    <td>{{ $value->programme }}</td>
                                    <td>{{ $value->year_level}}</td>
                                    <td>{{ $value->semester }}</td>
                                    <td>{{ $value->curriculum }}</td>
                                        <td>
                                            <form action="{{route('checklist_ctrl.destroy', $value->id)}}" method="POST">
                                                <a class="btn btn-primary" href="{{route('checklist_ctrl.edit', $value->id)}}", disabled>EDIT</a>
                                                <a class="btn btn-info" href="{{route('checklist_ctrl.show', $value->id)}}">SHOW</a>
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

        <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

        <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/frontend_css/bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#checklist_table').DataTable();</script>
    
@endsection