@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                <h3>COLLEGE MANAGEMENT
                    <div class="pull-right">
                        <a href="{{route('college_ctrl.create')}}" class="btn btn-primary">ADD COLLEGE</a>
                            </div>
                </h3>
            </div>
            <div class="module-body">
				

                   
                        <div class="input-group">
                            
                            
                        </div>
                            
                    

                    <div class="control-group">
                        <table id="college_table" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display" width="100%">
                            <thead>
                                <tr>
                                    <td><strong>#</strong></td>
                                    <td><strong>ACRONYM:</strong></td>
                                    <td><strong>DESCRIPTION</strong></td>
                                    <td><strong>ACTION</strong></td>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                                @foreach($post as $key => $posts)
                                <tr class="odd">
                                    <td>{{$key += 1}}</td>
                                    <td>{{ $posts->college_acronym }}</td>
                                    <td>{{ $posts->college_description}}</td>
                                        <td>
                                            <form action="{{route('college_ctrl.destroy', $posts->id)}}" method="POST">
                                                <a class="btn btn-primary" href="{{route('college_ctrl.edit', $posts->id)}}">EDIT</a>
                                                <a class="btn btn-info" href="{{route('college_ctrl.show', $posts->id)}}">VIEW</a>
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
    <script type="text/javascript">$('#college_table').DataTable();</script>
        
    
@endsection