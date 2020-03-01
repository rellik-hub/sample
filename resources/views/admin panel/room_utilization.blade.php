@extends('layouts.admin_layout')

@section('content')
<style>
    
    .table {
        float:right;
        width:74%;
    }
    .table td {
        text-align: center;
        vertical-align: middle;
        padding: 5px;
        position: relative;
    }

</style>


   <div id="sample" name="sample" class="control-group">
      <table>
          <tr>
              <td>
                <h3>&nbsp;&nbsp;&nbsp;ROOM UTILIZATION</h3>
              </td>
              <td>&nbsp;&nbsp;&nbsp;
                <select tabindex="" data-placeholder="" id="search" name="search" class="form-control input-lg span2", required>
                    <option value="">Select Room No.</option>
                    @foreach( $room as $rooms)
                        <option value="{{ $rooms->id }}">{{ $rooms->room_no }}</option>
                    @endforeach
                </select>
              </td>
          </tr>
      </table>


    <table cellpadding="0" cellspacing="10" border="5" class="datatable-1 table table-bordered table-stripped display" width="100%">
        <thead>
            <td style="width:10%;">TIME</td>
            <td>Mon</td>
            <td>Tue</td>
            <td>Wed</td>
            <td>Thu</td>
            <td>Fri</td>
            <td>Sat</td>
            <td>Sun</td>
        </thead> 
        
        <tbody>
            <tr style="width:50px; height:50px; padding:10px;"><td>07:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>08:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>08:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>09:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>09:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>10:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>10:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>11:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>11:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>12:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>12:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>01:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>01:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>02:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>02:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>03:00</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>03:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>04:30</td></tr>
            <tr style="width:50px; height:50px; padding:10px;"><td>05:00</td></tr>
    
        </tbody>
       
    </table>

   </div>
   
  


   <!------------------------------------JAVASCRIPT CODES----------------------------------------------------------------->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script
   src="https://code.jquery.com/jquery-3.4.1.js"
   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
   crossorigin="anonymous"></script>
                   
   <script type="text/javascript">
        $(document).ready(function(){

            $("#search").change(function(){
                $("#sample").children('div').remove();

                var holder = [];
                var count = 0;
                var schedule_subject = {!! json_encode($schedule_subject, JSON_HEX_TAG) !!};
                var room = {!! json_encode($room, JSON_HEX_TAG) !!};
                var courses = {!! json_encode($courses, JSON_HEX_TAG) !!};
                var find_value = $(this).val();
                 

                for(var a = 0; a < schedule_subject.length; a++)
                {
                    
                   if(schedule_subject[a].room == find_value)
                   { 
                      
                       //-----------MONDAY CODE------------//
                        if(schedule_subject[a].days == "monday")
                        {
                          
    //------------------------------------------MONDAY MORNING 07:00 SCHEDULE-------------------------------------------------------------------//
                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:108px;' class='alert alert-danger' role='alert'>" + courses[c].course_code + "</div>");
                                                $("#sample").append($option);
                                        }
                                }
                           }

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                              $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                               

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                                    

                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                                   

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:205px; width:78px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                                $("#sample").append($option);
                                        }
                                }
                                   

                            }
//------------------------------------------------MONDAY MORNING 08:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 09 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:330px; width:78px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    
                            }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:330px; width:78px; height:140px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:330px; width:78px; height:188px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:330px; width:78px; height:238px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:330px; width:78px; height:286px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:328px; width:78px; height:338px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        
//------------------------------------------------MONDAY MORNING 09:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:428px; width:78px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:428px; width:78px; height:138px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:428px; width:78px; height:188px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:428px; width:78px; height:238px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }
                        
//------------------------------------------------MONDAY MORNING 10:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 10 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:530px; width:78px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 10 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:530px; width:78px; height:138px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }


//------------------------------------------------MONDAY MORNING 11:00 SCHEDULE---------------------------------------------------------------------//

                        if(schedule_subject[a].start_hour == 11 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:460px; top:630px; width:78px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        }

                        //-----------TUESDAY CODE------------//
                        if(schedule_subject[a].days == "tuesday")
                        {
    //------------------------------------------TUESDAY MORNING-------------------------------------------------------------------//
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:113px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);
                                        }
                                }
                                

                           }

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);
                                        }
                                }
                                

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:205px; width:63px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                   

                            }

                            
//------------------------------------------------TUESDAY MORNING 08:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 09 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:330px; width:63px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    
                            }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:330px; width:63px; height:140px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:330px; width:63px; height:188px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:330px; width:63px; height:238px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:330px; width:63px; height:286px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:330px; width:63px; height:338px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        
//------------------------------------------------TUESDAY MORNING 09:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:428px; width:63px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:428px; width:63px; height:138px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:428px; width:63px; height:188px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:428px; width:63px; height:238px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }
                        
//------------------------------------------------TUESDAY MORNING 10:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 10 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:530px; width:63px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 10 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:530px; width:63px; height:138px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }


//------------------------------------------------TUESDAY MORNING 11:00 SCHEDULE---------------------------------------------------------------------//

                        if(schedule_subject[a].start_hour == 11 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:588px; top:630px; width:63px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }


                        }

                        //-----------WEDNESDAY CODE------------//
                        if(schedule_subject[a].days == "wednesday")
                        {
    //-----------------------------------WEDNESDAY MORNING---------------------------------------------------------------------------------------------//
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:107px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);
                                        }
                                }
                               

                           }

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);
                                        }
                                }
                                

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                   

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:205px; width:80px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    

                            }
                            
//------------------------------------------------WEDNESDAY MORNING 08:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 09 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:330px; width:80px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);
                                        }
                                }
                                    
                            }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:330px; width:80px; height:140px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:330px; width:80px; height:188px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:330px; width:80px; height:238px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:330px; width:80px; height:286px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 08 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:330px; width:80px; height:338px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        
//------------------------------------------------WEDNESDAY MORNING 09:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:428px; width:80px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:428px; width:80px; height:138px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:428px; width:80px; height:188px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 09 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:428px; width:80px; height:238px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }
                        
//------------------------------------------------WEDNESDAY MORNING 10:00 SCHEDULE---------------------------------------------------------------------//
                        
                        if(schedule_subject[a].start_hour == 10 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:530px; width:80px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        if(schedule_subject[a].start_hour == 10 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:530px; width:80px; height:138px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }


//------------------------------------------------WEDNESDAY MORNING 11:00 SCHEDULE---------------------------------------------------------------------//

                        if(schedule_subject[a].start_hour == 11 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 30)
                        {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:701px; top:630px; width:80px; height:88px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                        $("#sample").append($option);
                                        }
                                }
                                
                        }

                        }

                        //-----------THURSDAY CODE------------//
                        if(schedule_subject[a].days == "thursday")
                        {
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:113px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);
                                        }
                                }
                               

                           }

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);
                                        }
                                }
                                

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    
                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:831px; top:205px; width:67px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                        }

                        //-----------FRIDAY CODE------------//
                        if(schedule_subject[a].days == "friday")
                        {
//--------------------------------------FRIDAY MORNING---------------------------------------------------------------------------------------//
                          if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:113px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);

                                        }
                                }
                                

                           }

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);

                                        }
                                }
                                

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                   

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:948px; top:205px; width:41px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                        }

                        //-----------SATURDAY CODE------------//
                        if(schedule_subject[a].days == "saturday")
                        {
//---------------------------------------------SATURDAY MORNING-------------------------------------------------------------------------------//
                          if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:113px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);

                                        }
                                }
                                

                           }   

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);

                                        }
                                }
                                

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                   

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1040px; top:205px; width:50px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                        }

                        //-----------SUNDAY CODE------------//
                        if(schedule_subject[a].days == "sunday")
                        {
//--------------------------------------SUNDAY MORNING-------------------------------------------------------------------------------//
                          if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 8 && schedule_subject[a].end_min == 30)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:113px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);

                                        }
                                }
                                

                           }

                           if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 00)
                           {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:160px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                $("#sample").append($option);

                                        }
                                }
                                

                           }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 9 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:210px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                            
                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:260px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 10 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:310px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                   

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:360px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 11 && schedule_subject[a].end_min == 30)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:410px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }        

                            if(schedule_subject[a].start_hour == 7 && schedule_subject[a].start_min == 30 && schedule_subject[a].end_hour == 12 && schedule_subject[a].end_min == 00)
                            {
                                for(var c = 0; c < courses.length; c++)
                                {    
                                        if(courses[c].id == schedule_subject[a].course_id)
                                        {
                                                $option = $("<div id='add_div' name='add_div' style='position:absolute; left:1140px; top:205px; width:68px; height:460px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                                    $("#sample").append($option);

                                        }
                                }
                                    

                            }
                        }      
                   }                     
                }              
                                          
                
              
            });
                // $option = $("<div style='position:absolute; left:460px; top:205px; width:78px; height:113px;' class='alert alert-danger' role='alert'>"+ courses[c].course_code +"</div>");
                // $("#sample").append($option);
           
                // document.getElementById("append1").style.left = "100px"; //change left position
                // document.getElementById("append1").style.top = "100px";  //change top position
                // document.getElementById("append1").style.height = "50px"; //change the height 
                // var x = document.getElementsById("anchors")[2].id; //change the id of the element
           
            // change the position using javascript
            
    
        });         
   </script>



@endsection