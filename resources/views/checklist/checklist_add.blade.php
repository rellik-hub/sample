@extends('layouts.admin_layout')

@section('content')


<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/checklist">Checklist Management</a> <span class="divider">/</span></li>
                        <li class="active">Add Checklist</li>
                      </ul>
            <div class="module-head">
                <h3>ADD CHECKLIST</h3>
            </div>
            <div class="module-body">







                <form action="{{route('checklist_ctrl.store')}}" method="post">
			       @csrf
                    <table>
                        <tr>
                            <td>
                                <label class="control-label" for="basicinput" style="margin:5px display:block;">PROGRAM:</label>
                            <div class="controls" style="margin:5px">
                                <select tabindex="" data-placeholder="Select here.." name="programme" class="form-control input-lg span2", required>
                                        <option value="">Select here</option>
                                    @foreach( $programmes as $programme)
                                        <option value="{{ $programme->programme_acronym }}">{{ $programme->programme_acronym }}</option>
                                    @endforeach
                                </select>
                            </td>

                            <td>
                                <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR LEVEL:</label>
                            <div class="controls" style="margin:5px">
                                <select tabindex="" data-placeholder="Select here.." name="year_level" class="form-control input-lg span2", required>
                                    <option value="">Select here</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>

                            <td>
                                <label class="control-label" for="basicinput" style="margin:5px display:block;">SEMESTER:</label>
                            <div class="controls" style="margin:5px">
                                <select tabindex="" data-placeholder="Select here.." name="semester" class="form-control input-lg span2", required>
                                    <option value="">Select here</option>
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
                            <input type="text" id="basicinput" placeholder="" name="curriculum" class="form-control input-lg span2", required>
                           
                        </td>

                        <td>
                            <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR:</label>
                        <div class="controls" style="margin:5px">
                            <input type="text" id="year" placeholder="" name="year" class="form-control input-lg span2", required>
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

             
                  
                    <table id="course_table" class="datatable-1 table table-striped	 display" width="100%">
                            <thead>
                                <tr> 
                                    <td style="display:none;"><strong>ID</strong></td>
                                    <td><strong>CODE</strong></td> 
                                    <td><strong>DESCRIPTION</strong></td>
                                    <td style="text-align:center;"><strong>ADD</strong></td>
                                     
                                   
                                </tr>
                            </thead>
                           
                            <tbody> 
                                    @foreach($courses as $key => $value)
                                    <tr>
                                        <td id="id" style="display:none;">{{ $value->id }}</td>
                                        <td id="course_code">{{ $value->course_code }}</td>
                                        <td id="course_description" style="max-width:450px !important;">{{ $value->course_desription }}</td>
                                        <td id="button_add"><a class="btn btn-info" id="add" name="add">+</a></td>
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
    <script type="text/javascript" src="{{asset('js/backend_js/datatables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/frontend_css/bootstrap.min.js')}}"></script>
        
    
        <script type="text/javascript">
          $('#course_table').DataTable();         

            $(document).ready(function(){
                var d = new Date();
                var n = d.getFullYear();
                $("#year").val(n);
            
                $("#course_table tbody tr td").on('click', '#add', function(){
                        //get row contents into an array
                    //    var rowData = $(this).parent().map(function(){
                    //         return $(this).text().replace(/\s/g, "&nbsp;");
                    //     }).get();

                        var $row = $(this).closest("tr");
                        var $id = $row.find("#id").text().replace(/\s/g, "&nbsp;");
                        var $course_code = $row.find("#course_code").text().replace(/\s/g, "&nbsp;");
                        var $course_description = $row.find("#course_description").text().replace(/\s/g, "&nbsp;");
                       console.log($id, $course_code, $course_description);
                       addInput($id, $course_code, $course_description);
                       
                       function addInput(id, code, description){
                                    var tr =  '<tr>'+
                                                    '<td id="checklist_course_id" style="display:none;">'+
                                                    '<input type="text" id="course_id" placeholder="" name="course_id[]" value='+id+' class="form-control input-lg span2", required>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<input type="text" id="course_code" placeholder="" value='+code+' class="form-control input-lg span2", required>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<input type="text" id="course_description" placeholder="" value='+description+' class="form-control input-lg span3", required>'+
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
                                  
                                   
                                }
                    
                   
                });

                $('select[name="lecture"]').on('keyup', function(){
                    var a = $(this).val();
                    if(a < 0)
                    {
                        a = 0;
                    }
                });

                


                $('#subject_table tbody').on('click', '#remove', function(){
                       
                        var $row = $(this).closest("tr");
                        var $id = $row.find("#checklist_course_id").text().replace(/\s/g, "&nbsp;");
                        
                        $(this).parent().parent().remove();
                    });
                
                $("#course_table tbody").on('click', '#add', function(){
                    $(this).remove('#add');
                });

               

        });
    </script>




        


@endsection