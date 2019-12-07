@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                <h3>SUBJECT MANAGEMENT
                        <div class="pull-right">
                                <a href="{{route('course_ctrl.create')}}" class="btn btn-primary">ADD COURSE</a>
                                    </div>
                </h3>
            </div>
            <div class="module-body">

                
                    <div class="control-group">
                            <table id="sampleTable" class="datatable-1 table table-striped	 display" width="100%">
                                    <thead>
                                <tr>
                                    <td><strong>#</strong></td>
                                    <td><strong>CODE</strong></td>
                                    <td><strong>DESCRIPTION</strong></td>
                                    <td><strong>ACTION</strong></td>
                                </tr>
                            </thead>
                                     
                            <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{ $key += 1 }}</td>
                                        <td>{{ $value->course_code }}</td>
                                        <td style="max-width:450px !important;">{{ $value->course_desription }}</td>
                                        <td>
                                                <form action="{{route('course_ctrl.destroy', $value->id)}}" method="POST">
                                                        <a class="btn btn-primary" href="{{route('course_ctrl.edit', $value->id)}}">EDIT</a>
                                                        <a class="btn btn-info" href="{{route('course_ctrl.show', $value->id)}}">VIEW</a>
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
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
   


   
    
@endsection