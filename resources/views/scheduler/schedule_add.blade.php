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
                                                <td><strong>EDP CODE:</strong></td>
                                                <td>
                                                    <input type="text" id="edp_code" placeholder="" name="edp_code" value="" class="form-control input-lg span2">
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
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="monday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="tuesday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="wednesday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="thursday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="friday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="saturday" name="days[]" class="form-control input-lg"></td>
                                                    <td><input type="checkbox" style="width:40px; height:40px" id="days" placeholder="" value="sunday" name="days[]" class="form-control input-lg"></td>
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
                                                    <td><select tabindex="" data-placeholder="Select here.." id="room" name="room" class="form-control input-lg span2">
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
                                                    <td style="display:none;"><strong>Course ID:</strong></td>
                                                    <td style="display:none;"><input type="text" id="course_id" placeholder="" name="course_id" class="form-control input-lg span2"></td>
                                                    
                                                </tr>
                                                <tr>
                                                        <td style="display:none;"><strong>Checklist ID:</strong></td>
                                                        <td><input style="display:none;" type="text" id="checklist_id" placeholder="" name="checklist_id" class="form-control input-lg span2"></td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td style="display:none;"><strong>section id:</strong></td>
                                                        <td><input style="display:none;" type="text" id="section_id" placeholder="" name="section_id" class="form-control input-lg span2"></td>
                                                        
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
                            alert('data not saved!');
                        }

                    });
                     
                });  

              
               

        $(document).ready(function(){
            
           $('#days_table tbody tr').on('click', 'td', function(){
             
            
             
                });



        $("#room").on('click', function(){
            var days = [];
            var vacant = [];
            var holder = [];
            var holder_2 = [];
            var holder_3 = [];
            var display = [];
            var partial = [];
            var result = [];
            var count_Arr = [];
            var count = 0;
            var count_2 = 0;

        $('#days_table').find('input[type=checkbox]:checked').each(function() {
            days.push(this.value);
            });
        
        $('select[name="room"]').each(function()
        {
            $(this).children().remove();    
        }); 
            var start_hour = document.getElementById("start_hour").value;
            var start_min = document.getElementById("start_min").value;
            var end_hour = document.getElementById("end_hour").value;
            var end_min = document.getElementById("end_min").value;
            var schedule_subject = {!! json_encode($schedule_subject, JSON_HEX_TAG) !!};
            var room = {!! json_encode($rooms, JSON_HEX_TAG) !!};
        holder.length = 0;
        for(var a = 0; a < days.length; a++)
        {
            for(var b = 0; b < schedule_subject.length; b++)
            {
                if(schedule_subject[b].days == days[a])
                {
                    holder.push(schedule_subject[b].room);
                }

            }
        }


        for(var a = 0; a < holder.length; a++)
        {
            for(var b = 0; b < schedule_subject.length; b++)
            {
                if(schedule_subject[b].room == holder[a] && schedule_subject[b].start_hour == start_hour)
                {
                    holder_2.push(schedule_subject[b].room); 
                    
                }
            }
        }

        if(holder_2.length == 0)
        {
            for(var a = 0; a < room.length; a++)
            {
                display.push(room[a].id);
            }
        }
        
        for(var a = 0; a < holder_2.length; a++)
        {
            for(var b = 0; b < days.length; b++)
            {
                for(var c = 0; c < schedule_subject.length; c++)
                {
                    if(schedule_subject[c].room == holder_2[a] && schedule_subject[c].days == days[b] && schedule_subject[c].start_hour == start_hour && schedule_subject[c].end_hour >= start_hour)
                    {
                        holder_3.push(schedule_subject[c].room);
                    }
                }
            }
        }

        if(holder_3.length == 0)
        {
            for(var a = 0; a < room.length; a++)
            {
                display.push(room[a].id);
            }
        }
        
   
        for(var a = 0; a < holder_3.length; a++)
            {
                count = 0;
                for(var b = 0; b < holder_3.length; b++)
                {
                    if ( holder_3[b] == holder_3[a]) 
                    {
                        count +=1;
                        if(count >= 2)
                        {
                            holder_3.splice(b, 1); 
                        }
                    }
                    
                }
            }

        for(var a = 0; a < holder_3.length; a++)
        {
            for(var b = 0; b < room.length; b++)
            {
                if(room[b].id == holder_3[a])
                {
                    vacant.push(room[b].id);
                }
            }
        }
        

            for(var a = 0; a < vacant.length; a++)
            {
                count = 0;
                for(var b = 0; b < vacant.length; b++)
                {
                    if ( vacant[b] == vacant[a]) 
                    {
                        count +=1;
                        if(count >= 2)
                        {
                            vacant.splice(b, 1); 
                        }
                    }
                    
                }
            }
           

            for(var a = 0; a < vacant.length; a++)
            {
                count_Arr.push(a);
                for(var b = 0; b < room.length; b++)
                {
                    if(room[b].id != vacant[a])
                    {
                       if(count_Arr.length == 1)
                       {    
                            result.push(room[b].id);
                       }

                       if(count_Arr.length == 2)
                       {
                            result.push(room[b].id);
                        }

                       if( count_Arr.length == 3)
                       {
                            result.push(room[b].id);
                       }
                       
                       if(count_Arr.length == 4)
                       {
                            result.push(room[b].id);
                       }

                       if(count_Arr.length == 5)
                       {
                            result.push(room[b].id);
                       }

                       if(count_Arr.length == 6)
                       {
                            result.push(room[b].id);
                       }

                       if(count_Arr.length == 7)
                       {
                           result.push(room[b].id);
                       }

                    }
                }
            }
            
            for(var a = 0; a < result.length; a++)
            {
                count = 0;
                for(var b = 0; b < result.length; b++)
                {
                    if(result[b] == result[a])
                    {
                        count+=1;
                        if(count == vacant.length)
                        {
                            display.push(result[b]);
                        }
                    }
                }
            }
            
            for(var a = 0; a < display.length; a++)
            {
                count = 0;
                for(var b = 0; b < display.length; b++)
                {
                    if(display[b] == display[a])
                    {
                        count +=1;
                            if(count >= 2)
                            {
                                display.splice(b, 1); 
                            }
                    }
                }
            }
            
            for(var a = 0; a < display.length; a++)
            {
                for(var b = 0; b < room.length; b++)
                {
                    if(room[b].id == display[a])
                    {
                        $option = $('<option value="'+ room[b].id +'">' + room[b].room_no + '</option>');
                        $('select[name="room"]').append($option);
                    }
                }
            }
       
        });


       
               
     
            $("#start_min").change(function(){
                var start_hour = parseInt(document.getElementById("start_hour").value);
                var start_min = parseInt(document.getElementById("start_min").value);
                var units = parseInt(document.getElementById("units").value);
                if(start_hour == 07)
                {
                    $('select[name="start_min"]').value('30').change();
                }
                var days = [];
                $('#days_table').find('input[type=checkbox]:checked').each(function() 
                {
                    days.push(this.value);
                });
                 if(days.length == 1)
                 {
                     var add = units/days.length;
                     var result = start_hour + add;
                     $("#end_hour").val(result);
                     alert(result);
                 }

                 if(days.length == 2)
                 {
                     if((units%days.length) == 1)
                     {
                         if(start_min == 00)
                         {
                             var add = start_hour + 1;
                             $("#end_hour").val(add);
                             $('select[name="end_min"]').val('00').change();
                         }

                         if(start_min == 30)
                         {
                             var add = start_hour + 1;
                             $("#end_hour").val(add);
                             $('select[name="end_min"]').val('30').change();
                         }
                     }
                 }

                 if(days.length == 3)
                 {
                     var add = units / days.length;
                     var result = start_hour + add;
                     $("#end_hour").val(result);
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
                        $("#edp_code").val(rowData[2]+ "-" + year_level + "-" + n); 
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
                        $("#edp_code").val(rowData[2]+ "-" + year_level + "-" + n);
                        
                       });

                       


                        
                      
                });
               
/**-------------------------------------------find section-----------------------------------------------------------*/             
                $('select[name="year_level"]').change(function()
                {
                                $('select[name="section"]').each(function()
                                {
                                    $(this).children().remove();    
                                });  


                                $('select[name="section"]').append('<option value="">' + 'Select..' + '</option>')
                                        var year_level = $(this).val();
                                        var programme = document.getElementById("programme").value;
                                        var section ={!! json_encode($section, JSON_HEX_TAG) !!};
                                        for (var i = 0; i <= section.length; i++)
                                        {
                                            
                                            if( section[i].year_level == year_level && section[i].programme == programme)
                                            {
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