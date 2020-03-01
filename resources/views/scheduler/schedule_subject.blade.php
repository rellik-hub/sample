@extends('layouts.admin_layout')

@section('content')
    
<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                <h3>SET SCHEDULE</h3>
            </div>
            <div class="module-body">

<!------------------------------------show checklist subjects----------------------------------------------------------------->

<div class="module-head">
        <h3 style="text-align:center;"><strong>SUBJECTS</strong></h3>
    </div>
<!---------------------------------table for the checklist------------------------------------------------------------------>
                <table id="checklist_table" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display" width="100%">
                        
                    <thead>
                        <td><strong>CODE</strong></td>
                        <td><strong>DESCRIPTION</strong></td>
                        
                    </thead>
                    <tbody>
                        @foreach ($find_courses as $key => $courses)
                            <tr>
                            <td>{{ $courses->course_code }}</td>
                            <td>{{ $courses->course_description }}</td>
                            <td><button type="button" id="modal_trigger" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">set</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>









<!---------------------------------------------------------------------------------------------------->



                      <!-- Button trigger modal -->
                     


                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                            <form id="modal_form">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="exampleModalLabel">SET SCHEDULE
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                          </h4>
                                          
                                        </div>
                                        <div class="modal-body">
                                                <table>
                                                        <tr style="text-align:center;">
                                                            <td><strong>COURSE:</strong></td>
                                                            <td><input type="text" id="code" placeholder="" name="course_code" value="" class="form-control input-lg span1"></td>
                                                            <td><input type="text" id="description" placeholder="" name="course_description" value="" class="form-control input-lg span4" max-width="350px;"></td>
                                                        </tr>
                                                </table>
                            
                                                    <table>
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
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Monday" name="days[]" class="form-control input-lg"></td>
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Tuesday" name="days[]" class="form-control input-lg"></td>
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Wednesday" name="days[]" class="form-control input-lg"></td>
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Thursday" name="days[]" class="form-control input-lg"></td>
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Friday" name="days[]" class="form-control input-lg"></td>
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Saturday" name="days[]" class="form-control input-lg"></td>
                                                                <td><input type="checkbox" style="width:40px; height:40px" id="basicinput" placeholder="" value="Sunday" name="days[]" class="form-control input-lg"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <tr>&nbsp;</tr>
                                                            <tr>
                                                                <td><label class="control-label" for="basicinput" style="margin:5px display:block;"><strong>CLASS TYPE:</strong></label></td>
                                                                <td>
                                                                        <select tabindex="0" data-placeholder="Select here.." name="class_type" class="form-control input-lg span2", required>
                                                                                <option value="">Select here..</option>
                                                                                <option value="lecture">lecture</option>
                                                                                <option value="laboratory">laboratory</option>
                                                                            </select>
                                                                </td>
                                                            </tr>
                            
                                                            <tr>
                                                                    <td><strong>TIME:</strong></td>
                                                                    <td><input type="text" id="from_time" placeholder="07:30" name="from_time" onkeyup="From_Time()" maxlength="5" class="form-control input-lg span1", required>
                                                                            &nbsp;<strong>-</strong>&nbsp;&nbsp;<input type="text" id="to_time" placeholder="" name="to_time" onkeyup="To_Time()" maxlength="5" class="form-control input-lg span1", required></td>
                                                            </tr>
                            
                                                            <tr>
                                                                <td><strong>ROOMS:</strong></td>
                                                                <td><select tabindex="" data-placeholder="Select here.." name="room" class="form-control input-lg span2">
                                                                        <option value="">Select here</option>
                                                                    @foreach( $rooms as $room)
                                                                        <option value="{{ $room->room_no }}">{{ $room->room_no }}</option>
                                                                    @endforeach
                                                                </select></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                    <td><strong>INSTRUCTOR:</strong></td>
                                                                    <td><select tabindex="" data-placeholder="Select here.." name="faculty" class="form-control input-lg span2", required>
                                                                            <option value="">Select here</option>
                                                                        @foreach( $faculty as $instructor)
                                                                            <option value="{{ $instructor->cs_id }}">{{ $instructor->first_name }}&nbsp;{{ $instructor->middlename }}.&nbsp;{{ $instructor->surname }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                            </tr>
                            
                                                            
                                                    </table>
                                             
                            
                                        </div>
                                        <div class="modal-footer">
                                          <button style="float:left;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                      </div>
                                    </form>
                                    </div>
                                  </div>


                      

                      




                                
                            
<!------------------------------------end of modal--------------------------------------------------------->

            </div>
        </div>                    
                                
             
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
                                

        <script type="text/javascript">

            function From_Time()
             {
                    var x = document.getElementById("from_time");
                    var n = x.value;
                    if(n.length == 2 && x.value >= 13){
                        x.value = 12;
                    }
                    if(n.length == 2){
                       x.value = x.value.concat(':');
                    }
                    

             }

            function To_Time()
             {
                    var a = document.getElementById("to_time");
                    var n = a.value;
                    if(n.length == 2 && a.value >= 13){
                        a.value = 12;
                    }

                    if(n.length == 2){
                        a.value = a.value.concat(':');
                    }

                    
            }
/*---------------------------------------search event--------------------------------------------------------------------**/





/**----------------------------click event---------------------------------------------***/
            

      
$(document).ready(function(){
    var rowData;
    $("#checklist_table tbody").on('click', 'tr', function(){
            //get row contents into an array
            rowData = $(this).children("td").map(function(){
                return $(this).text().replace(/\s/g, ' ');
            }).get();
           
            $("#code").val(rowData[0]);
            $("#description").val(rowData[1]);
   
    });

/**------------------------------------------saving modal form here----------------------------------------------*/
  
    $("#modal_form").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                type: "POST", 
                url: "{{ route('schedule_ctrl.store') }}",
                data: $('#modal_form').serialize(),
                success: function(response){
                    console.log(response)
                    $('#exampleModal').modal(hide)
                    alert("Data saved");
                }, 
                error: function(error){
                    console.log(error)
                    alert("Data not saved");
                }
            });

        });




});



      

                
</script>
                                
@endsection