@extends('layouts.admin_layout')

@section('content')


<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/checklist">Checklist Management</a> <span class="divider">/</span></li>
                        <li class="active">Edit Checklist</li>
                      </ul>
            <div class="module-head">
                <h3>EDIT CHECKLIST</h3>
            </div>
            <div class="module-body">







                <form method="POST" action="{{route('checklist_ctrl.update', $data->id)}}">
                   @csrf
                   @method('PATCH')
                    <table>
                        <tr>
                            <td>
                                <label class="control-label" for="basicinput" style="margin:5px display:block;">PROGRAM:</label>
                            <div class="controls" style="margin:5px">
                                <select tabindex="0" data-placeholder="Select here.." name="programme" class="form-control input-lg span2">
                                        <option value="0" disabled>Select here</option>
                                    @foreach( $programmes as $programme)
                                        <option value="{{ $programme->programme_acronym }}">{{ $programme->programme_acronym }}</option>
                                    @endforeach
                                </select>
                            </td>

                            <td>
                                <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR LEVEL:</label>
                            <div class="controls" style="margin:5px">
                                <select tabindex="0" data-placeholder="Select here.." name="year_level" class="form-control input-lg span2">
                                        <option value="0" disabled>Select here</option>
                                    <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                </select>
                            </td>

                            <td>
                                <label class="control-label" for="basicinput" style="margin:5px display:block;">SEMESTER:</label>
                            <div class="controls" style="margin:5px">
                                <select tabindex="0" data-placeholder="Select here.." name="semester" class="form-control input-lg span2">
                                        <option value="0" disabled>Select here</option>
                                    <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="summer">summer</option>
                                </select>
                            </td>

                        </tr>


                    </table>


                    <table>
                        <td>
                            <label class="control-label" for="basicinput" style="margin:5px display:block;">CURRICULUM:</label>
                        <div class="controls" style="margin:5px">
                            <select tabindex="0" data-placeholder="Select here.." name="curriculum" class="form-control input-lg span2">
                                    <option value="0" disabled>Select here</option>
                                <option value="new">NEW</option>
                               <option value="old">OLD</option>
                            </select>
                        </td>

                        <td>
                            <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR:</label>
                        <div class="controls" style="margin:5px">
                            <input type="text" id="basicinput" placeholder="" name="year" class="form-control input-lg span2", required>
                           </td>      

                    </table>

                    <table id="subject_table" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                            <tr><h4>SUBJECTS</h4></tr>
                            <tr> 
                              
                                <td><strong>COURSE CODE</strong></td> 
                                <td><strong>DESCRIPTION</strong></td>
                                <td><strong>LEC</strong></td>
                                <td><strong>LAB</strong></td>
                                <td><strong>UNIT</strong></td>
                                <td><strong>ACTION</strong></td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($check as $subjects)
                            
                                <tr>
                                    <td>{{ $subjects->course_code }}</td>
                                            <td>{{ $subjects->course_desription }}</td>
                                            <td style="display:none;"><input type="number" id="lecture" placeholder="" name="course_id[]" value="{{  $subjects->course_id }}" class="form-control input-lg span1", required></td>
                                            <td style="display:none;"><input type="number" id="lecture" placeholder="" name="checklist_id[]" value="{{  $subjects->id }}" class="form-control input-lg span1", required></td>
                                            <td><input type="number" id="lecture" placeholder="" name="lecture[]" value="{{  $subjects->lecture }}" class="form-control input-lg span1", required></td>
                                            <td><input type="number" id="laboratory" placeholder="" name="laboratory[]" value="{{  $subjects->laboratory }}" class="form-control input-lg span1", required></td>
                                            <td><input type="number" id="unit" placeholder="" name="unit[]" value="{{  $subjects->units }}" class="form-control input-lg span1", required></td>
                                            <td><button style="text-align:center;" class="btn btn-danger" name="remove" id="remove">-</button>
                                    </td>
                                </tr>
                            @endforeach
                          
                        </tbody>
                        
                    </table>
                    
                            
                       
                    
                    <table>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td><!----total------>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            
                            <td><div class="controls" style="margin:5px">
                                    <label class="control-label" for="basicinput" style="margin:5px display:block;"></label>
                                    <output id="lecture_result"></output>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            
                            
                           

                            <td>
                                <div class="controls" style="margin:5px">
                                        <label class="control-label" for="basicinput" style="margin:5px display:block;"></label>
                                        <output id="laboratory_result"></output>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>

                            <td>
                                <div class="controls" style="margin:5px">
                                        <label class="control-label" for="basicinput" style="margin:5px display:block;"></label>
                                        <output id="unit_result"></output>
                            </td>
                        </tr>
                    </table>
                    
                
                  <br>
                        <div>
                                <button type='submit' class="btn btn-primary">SAVE</button>
                                
                            </div>
                            <br>
                    </form>
                    
                     <br>

             
                  
                    <table id="course_table" cellpadding="0" cellspacing="0" border="0" class="table tabledatatable-1 table-bordered table-striped display" width="100%">
                            <thead>
                                <tr> 
                                    <td style="text-align:center;"><strong>COURSE CODE</strong></td> 
                                    <td style="text-align:center;"><strong>DESCRIPTION</strong></td>
                                    <td style="text-align:center;"><strong>ADD</strong></td>
                                    
                                   
                                </tr>
                            </thead>
                           
                            <tbody> 
                                    @foreach($courses as $key => $value)
                                    <tr>
                                        <td>{{ $value->course_code }}</td>
                                        <td>{{ $value->course_desription }}</td>
                                        <td><a class="btn btn-info" id="add" name="add">+</a></td>
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
    <script type="text/javascript">$('#course_table').DataTable();</script>


        <script>
          
            $(document).ready(function(){
                var rowData;
                $("#course_table tbody").on('click', 'tr', function(){
                        //get row contents into an array
                        rowData = $(this).children("td").map(function(){
                            return $(this).text().replace(/\s/g, "&nbsp;");
                        }).get();
                       
                        addInput(rowData[0], rowData[1]);

                      
                            
                        
                        
                        function addInput(code, description){
                                    var tr =  '<tr>'+
                                        '<td>'+
                                            '<input type="text" id="course_code" placeholder="" name="course_code[]" value='+code+' class="form-control input-lg span2", required>'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" id="course_description" placeholder="" name="course_description[]" value='+description+' class="form-control input-lg span3", required>'+
                                        '</td>'+
                                        '<td>'+ 
                                            '<input type="number" id="lecture" placeholder="" name="lecture[]" value="0" class="form-control input-lg span1", required>'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="number" id="laboratory" placeholder="" name="laboratory[]" value="0" class="form-control input-lg span1", required>'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="number" id="unit" placeholder="" name="unit[]" value="0" class="form-control input-lg span1", required>'+
                                        '</td>'+
                                        '<td>'+
                                                '<button style="text-align:center;" class="btn btn-danger" name="remove" id="remove">-</button>'+
                                        '</td>'+
                                        '</tr>';
                                    $('#subject_table tbody').append(tr);
                                   // console.log(code, description);
                                }
                    
                   
                });

                $('#subject_table tbody').on('click', '#remove', function(){
                        $(this).parent().parent().remove();
                    }); 


               

               

        });
    </script>




        


@endsection