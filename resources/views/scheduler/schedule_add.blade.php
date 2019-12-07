@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/scheduler">Schedule Management</a> <span class="divider">/</span></li>
                        <li class="active">Create Schedule</li>
                      </ul>
            <div class="module-head">
                    
                <h3>CREATE SCHEDULE</h3>
                
            </div>
            <div class="module-body">
       
<!------------------------CREATE SCHEDULE SELECT CHECKLIST, SECTION-------------------------------------->				
            <form action="{{route('schedule_ctrl.store')}}" method="post">
                    @csrf
                     <table>
                         <tr>
                             <td>
                                 <label class="control-label" for="basicinput" style="margin:5px display:block;">PROGRAM:</label>
                             <div class="controls" style="margin:5px">
                                <input type="text" list="programme_list" id="programme" placeholder="" name="programme" class="form-control input-lg span2", required>
                                       <datalist id="programme_list">
                                            @foreach( $programmes as $programme)
                                            <option value="{{ $programme->programme_acronym }}">{{ $programme->programme_acronym }}</option>
                                        @endforeach
                                       </datalist>     
                             </td>
 
                             <td>
                                 <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR LEVEL:</label>
                             <div class="controls" style="margin:5px">
                                    <select tabindex="" data-placeholder="Select here.." id="year_level" name="year_level" class="form-control input-lg span2", required>
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
                                <select tabindex="" data-placeholder="Select here.." id="semester" name="semester" class="form-control input-lg span2", required>
                                    <option value="">Select here</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="summer">summer</option>
                                </select>
                            </td>
                            <td>
                               <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR:</label>
                           <div class="controls" style="margin:5px">
                               <input type="text" id="basicinput" placeholder="" name="year" class="form-control input-lg span1", required>
                               
                           </td>
                                <td>
                                        <label class="control-label" for="basicinput" style="margin:5px display:block;">SECTION:</label>
                                    <div class="controls" style="margin:5px">
                                        <select tabindex="" data-placeholder="Select here.." id="section" name="section" class="form-control input-lg span2", required>
                                          </select>
                                    </td>
                           </tr>
                         
                     </table>
         <!-----------------------------------------------------            
                     <table id="scheduler" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display" width="100%">
                         <thead>
                             <td><strong>SECTION ID</strong></td>
                             <td><strong>COURSE ID</strong></td>
                             <td><strong>SCHEDULE</strong></td>
                             <td><strong>FACULTY ID</strong></td>
                             <td><strong>ROOM NO.</strong></td>
                             <td><strong>CHECKLIST ID</strong></td>
                             
                         </thead>
                         <tbody>
                            
                         </tbody>
                     </table>

   ------------------------------------------------------------------ -->             
                   

                        <div>
                             <!--   <button type='submit' class="btn btn-primary">Create</button>        ---->
                                
                            </div>
                </form>

<br>

                <label class="control-label" for="basicinput" style="margin:5px display:block;">&nbsp;&nbsp;&nbsp;&nbsp;CHECKLIST:</label>
                    <div class="controls" style="margin:5px">
                        <select tabindex="" data-placeholder="Select here.." id="checklist" name="checklist" class="form-control input-lg span2", required>
                            
                        </select>

               
                
                
            </div>
           
        </div>              
                           
        </div>
    </div>
<!-----------------------------------------MODAL----------------------------------------------------->

        <button style="display:none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
            
            <!-- Modal -->
            <div class="modal hide" draggable="true" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                        <form id="partial_form">
                            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                  <div class="modal-content">
                     <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                    <h5 class="modal-title" id="exampleModalLabel">SET SCHEDULE</h5>
                    
                    </div>
                    <div class="modal-body">
                        

                            <div style="float:left; width:25%; display:block;">
                    
                                    <table>
                                            <tr>
                                                <td><strong>EDB CODE:</strong></td>
                                                <td>
                                                    <input type="text" id="edb_code" placeholder="" name="edb_code" value="" class="form-control input-lg span2">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>CODE:</strong></td>
                                                <td><input type="text" id="code" placeholder="" name="" value="" class="form-control input-lg span2"></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><strong>DESCRIPTION:</strong></td>
                                                <td><textarea type="text" id="description" placeholder="" name="" value="" class="form-control input-lg span2"></textarea></td>
                                            </tr>
                                    </table>
                        
                                        <table id="days_table">
                                            <thead style="text-align:center;">
                                                <td>&nbsp;</td>
                                                <td>M</td>
                                                <td>T</td>
                                                <td>W</td>
                                                <td>Th</td>
                                                <td>F</td>
                                                <td>Sat</td>
                                                <td>Sun</td>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>DAYS:</strong></td>
                                                    <td style="display:none;"><input style="display:none;" type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Monday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Tuesday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Wednesday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Thursday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Friday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Saturday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="Sunday" name="days[]" class="form-control input-lg"></td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <table>
                                            <tr>&nbsp;</tr>
                                                <tr>
                                                    <td><label class="control-label" for="basicinput" style="margin:5px display:block;"><strong>CLASS TYPE:</strong></label></td>
                                                    <td>
                                                            <input type="text" id="class_type" placeholder="" name="class_type" value="" class="form-control input-lg span2">
                                                    </td>
                                                </tr>
                        
                                                <tr>
                                                        <td><strong>TIME START:</strong></td>
                                                        <td><input type="number" id="start_hour" name="start_hour" maxlength="2" class="form-control input-lg span1", required>
                                                            <strong>:</strong>
                                                            <select tabindex="" data-placeholder="" id="start_min" name="start_min" class="form-control input-lg span1", required>
                                                                <option value="">&nbsp;&nbsp;</option>
                                                                <option value="00">00</option>
                                                                <option value="30">30</option>
                                                            
                                                        </td>
                                                </tr>

                                                <tr>
                                                    <td><strong>TIME END:</strong></td>
                                                    <td>
                                                            <input type="number" id="end_hour" placeholder="" name="end_hour" maxlength="2" class="form-control input-lg span1", required>
                                                            <strong>:</strong>
                                                            <select tabindex="" data-placeholder="" id="end_min" name="end_min" class="form-control input-lg span1", required>
                                                                    <option value="">&nbsp;&nbsp;</option>
                                                                    <option value="00">00</option>
                                                                    <option value="30">30</option>
                                                            </select>
                                                    </td>

                                                </tr>
                        
                                                <tr>
                                                    <td><strong>ROOMS:</strong></td>
                                                    <td><select tabindex="" data-placeholder="Select here.." name="room" class="form-control input-lg span2">
                                                            <option value="">Select here</option>
                                                        
                                                    </select></td>
                                                </tr>
                                                
                                                <tr>
                                                        <td><strong>INSTRUCTOR:</strong></td>
                                                        <td><select tabindex="" data-placeholder="Select here.." name="faculty" value="" class="form-control input-lg span2", required>
                                                                <option value="">Select here</option>
                                                            @foreach( $faculty as $instructor)
                                                                <option value="{{ $instructor->cs_id }}">{{ $instructor->first_name }}&nbsp;{{ $instructor->middlename }}.&nbsp;{{ $instructor->surname }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td style=""><strong>Course ID:</strong></td>
                                                    <td><input type="text" id="course_id" placeholder="" name="course_id" class="form-control input-lg span2"></td>
                                                    
                                                </tr>
                                                <tr>
                                                        <td style=""><strong>Checklist ID:</strong></td>
                                                        <td><input style="" type="text" id="checklist_id" placeholder="" name="checklist_id" class="form-control input-lg span2"></td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td style=""><strong>section id:</strong></td>
                                                        <td><input style="" type="text" id="section_id" placeholder="" name="section_id" class="form-control input-lg span2"></td>
                                                        
                                                    </tr>
                                                <tr>
                                                        <td><strong>UNITS:</strong></td>
                                                        <td><input type="number" id="units" placeholder="" name="units" class="form-control input-lg span2"></td>
                                                        
                                                    </tr>
                                        </table>
                                       
                                                
                                        
                                       
                                    </div>

                    </div>
                    <div class="modal-footer">
                 <!--   <a style="float:left;" type="button" class="btn btn-secondary" data-dismiss="modal" onclick="toggle_button()">Close</a>  --->
                    <a type="button" id="save" name="save"  onsubmit="return post()" class="btn btn-primary" data-dismiss="modal">Submit</a>
                    </div>
                </div>
            </form>
                </div>
            </div>





                <div style="float:right; width:100%; display:block;">
                        <table name="found_courses" id="found_courses" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display" width="100%">
                                <thead>
                                    <tr><h4><strong>SUBJECTS</strong></h4></tr>
                                    <td style="display:none;"><strong>CHECKLIST ID:</strong></td>  
                                    <td style="display:none;"><strong>COURSE ID:</strong></td>  
                                    <td><strong>CODE</strong></td>
                                    <td><strong>DESCRIPTION</strong></td>
                                    <td><strong>LEC</strong></td>
                                    <td><strong>LAB</strong></td>
                                    <td><strong>UNITS</strong></td>
                                    <td><strong>ACTION</strong></td>
                                    
                                </thead>
                                <tbody>
        
                                </tbody>
                            </table>
                </div>
                        
    </div>
   </div>


        
   


                       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
                        
        <script type="text/javascript">
        


       $(document).on("click", "#save", function(e){
                e.preventDefault();
                    $.ajax({
                        type: "post", 
                        url: "{{ route('setcourses_ctrl.store') }}",
                        data: $("#partial_form").serialize(),
                        success: function(data){
                            //location.href = data;
                            alert('data saved successfully!');
                            
                        }, error: function(error){
                            console.log(JSON.stringify(error));
                            alert('data not saved: We suggest to check the section must have a value.');
                        }

                    });
                     
                });  

              
            

        $(document).ready(function(){
            
           $('#days_table tbody tr').on('click', 'td', function(){
            var rowData = $(this).children("#days").map(function(){ return $(this).val(); }).get();
                        console.log(rowData);
            var days = {!! json_encode($days, JSON_HEX_TAG) !!};
            for (var i = 0; i < days.length; i++)
                {
                                
                    if( days[i].days == rowData)
                    {
                        $option = $('<option value="'+ days[i].id +'">' + days[i].room + '</option>');
                        $('select[name="room"]').append($option);
                        
                    }
                }
                
                });




            $("#start_min").change(function(){
                var start_hour = parseInt(document.getElementById("start_hour").value);
                if(start_hour == 07)
                {
                    $("start_min").value = 30;
                }
                var day = $('input[name="days[]"]:checked').length;
                var units = parseInt(document.getElementById("units").value);
                    for(var i=1; i<=day; i++)
                    {
                       if(i == 3)
                        {
                            var add = units/day;
                            if(add == 1)
                            {
                                var end_hour = start_hour + 1;
                                prepend_out = String(end_hour).padStart(2, '0'); 
                                $("#end_hour").val(prepend_out);
                            }

                                
                        } 
                    }
                
                
            });
                
           });

                
                $("#found_courses tbody").on('click', 'tr', function(){
                        //get row contents into an array
                        
                       var rowData = $(this).children("td").map(function(){
                            return $(this).text().replace(/\s/g, ' ');
                        }).get();
                    
                        var table = $('#found_courses tbody');
                       table.on('click', '#modal_trigger_lec', function(){
                        $(this).toggle();
                        
                        $('#code').val(rowData[2]);
                        $('#description').val(rowData[3]);
                        $('#course_id').val(rowData[1]);
                        $('#units').val(rowData[4]);
                        $('#checklist_id').val(rowData[0]);
                        $('#class_type').val('lecture');
                        var section_id = document.getElementById("section").value;
                        $('#section_id').val(section_id);
                        $("#days").val("");
                        $("#start_hour").val("");
                        $("#start_min").val("");
                        $("#end_hour").val("");
                        $("#end_min").val("");
                        $("#room").val("");
                        $("#faculty").val("");
                        $("#unit").val("");
                        var year_level = document.getElementById("year_level").value;
                        var d = new Date();
                        var n = d.getFullYear();
                        $("#edb_code").val(rowData[2]+ "-" + year_level + "-" + n); 
                       });

                       table.on('click', '#modal_trigger_lab', function(){
                        $(this).toggle();
                        $('#code').val(rowData[2]);
                        $('#description').val(rowData[3]);
                        $('#course_id').val(rowData[1]);
                        $('#units').val(rowData[5]);
                        $('#checklist_id').val(rowData[0]);
                        $('#class_type').val('laboratory');
                        var section_id = document.getElementById("section").value;
                        $('#section_id').val(section_id);
                        $("#days").val("");
                        $("#start_hour").val("");
                        $("#start_min").val("");
                        $("#end_hour").val("");
                        $("#end_min").val("");
                        $("#room").val("");
                        $("#faculty").val("");
                        $("#unit").val("");
                        var year_level = document.getElementById("year_level").value;
                        var d = new Date();
                        var n = d.getFullYear();
                        $("#edb_code").val(rowData[2]+ "-" + year_level + "-" + n);
                        
                       });

                       


                        
                      
                });
               
/**-------------------------------------------find section-----------------------------------------------------------*/             
                $('select[name="year_level"]').change(function(){
                                $('select[name="section"]').each(function(){
                                        $(this).children().remove();    
                                });  
                                $('select[name="section"]').append('<option value="">' + 'Select..' + '</option>')
                                        var year_level = $(this).val();
                                        var programme = document.getElementById("programme").value;
                                        var section ={!! json_encode($section, JSON_HEX_TAG) !!};
                                        for (var i = 0; i <= section.length; i++){
                                            
                                            if( section[i].year_level == year_level && section[i].programme == programme){
                                                $option = $('<option value="'+ section[i].id +'">' + section[i].section + '</option>');
                                                            //console.log(checklist[i].id);
                                                $('select[name="section"]').append($option);
                                                
                                            }
                                        }
                                    });

/*---------------------------------------------find chechlist ID -----------------------------------------------------*/
                $('select[name="semester"]').change(function(){
                   $('select[name="checklist"]').each(function(){
                        $(this).children().remove();    
                   });  
                $('select[name="checklist"]').append('<option value="">' + 'Select here' + '</option>')
                        var semester = $(this).val();
                        var year_level = document.getElementById("year_level").value;
                        var programme = document.getElementById("programme").value;
                        var checklist ={!! json_encode($checklist, JSON_HEX_TAG) !!};
                        for (var i = 0; i < checklist.length; i++){
                            
                            if( checklist[i].semester == semester && checklist[i].year_level == year_level && checklist[i].programme == programme){
                                $option = $('<option value="'+ checklist[i].id +'">'
                                             + checklist[i].programme +'-'+ checklist[i].year_level +
                                             '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ checklist[i].semester +'-SEM'+
                                             '</option>');
                                             //console.log(checklist[i].id);
                                $('select[name="checklist"]').append($option);
                                
                            }
                        }
                    });

/**------------------------------------------------find matched room-------------------------------------------------------------*/
      

        
        </script>

        <script type="text/javascript">
        $(document).ready(function(){

           

            $('select[name="checklist"]').change(function(){
              
                   $('#found_courses tbody').children().remove(); 
                   var check_id = $(this).val();
                   var check ={!! json_encode($check, JSON_HEX_TAG) !!};
                   
                   for (var i = 0; i < check.length; i++){
                       if( check[i].id == check_id ){

                           $option = $(
                               '<tr>'+
                               '<td style="display:none;">'+ check[i].id +'</td>'+
                               '<td style="display:none;">'+ check[i].course_id +'</td>'+
                               '<td>'+ check[i].course_code +'</td>'+
                               '<td style="max-width:250; max-height:150px;">'+ check[i].course_desription +'</td>'+
                               '<td>'+ check[i].lecture +'</td>'+
                               '<td>'+ check[i].laboratory +'</td>'+
                               '<td>'+ check[i].units +'</td>'+
                               '<td>'+ '<a type="button" id="modal_trigger_lec" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">' + 'lec' + '</a>' + '&nbsp;' +
                                      '<a type="button" id="modal_trigger_lab" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">' + 'lab' + '</a>' + '</td>' +
                               '</tr>'
                                    );
                            
                           $('#found_courses tbody').append($option);
                       }
                   }
               });

               
        });
        </script>

       

@endsection