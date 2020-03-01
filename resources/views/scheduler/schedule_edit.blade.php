@extends('layouts.admin_layout')

@section('content')
<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                <h3>EDIT SCHEDULE</h3>
            </div>
            <div class="module-body">
<!------------------------CREATE SCHEDULE SELECT PROGRAM, YEAR LEVEL, SECTION, SEMESTER-------------------------------------->				
            <form action="{{route('schedule_ctrl.update', $data->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                     <table>
                         <tr>
                             <td>
                                 <label class="control-label" for="basicinput" style="margin:5px display:block;">PROGRAM:</label>
                             <div class="controls" style="margin:5px">
                                <select tabindex="1" data-placeholder="Select here.." name="programme" value="{{ $data->programme}}" class="form-control input-lg span2", required>
                                    <option value="">Select here..</option>
                                    @foreach( $programmes as $programme)
                                        <option value="{{ $programme->programme_acronym }}">{{ $programme->programme_acronym }}</option>
                                    @endforeach
                                 </select>
                             </td>
 
                             <td>
                                 <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR LEVEL:</label>
                             <div class="controls" style="margin:5px">
                                 <select tabindex="1" data-placeholder="Select here.." name="year_level" value="{{ $data->year_level}}"  class="form-control input-lg span2", required>
                                    <option value="">Select here..</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                 </select>
                             </td>
                           </tr>
 
 
                     </table>

                     <table>
                         <tr>
                                    <td>
                                        <label class="control-label" for="basicinput" style="margin:5px display:block;">SECTION:</label>
                                        <div class="controls" style="margin:5px">
                                            <input type="text" id="basicinput" placeholder="Please fill with alphabet" name="section" value="{{ $data->section}}" class="form-control input-lg span2", required>
                                            
                                    </td>
            
            
                                     <td>
                                         <label class="control-label" for="basicinput" style="margin:5px display:block;">SEMESTER:</label>
                                     <div class="controls" style="margin:5px">
                                         <select tabindex="1" data-placeholder="Select here.." name="semester" value="{{ $data->semester}}" class="form-control input-lg span2", required>
                                            <option value="">Select here..</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="summer">summer</option>
                                         </select>
                                     </td>
                                     <td>
                                        <label class="control-label" for="basicinput" style="margin:5px display:block;">YEAR:</label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" name="year" value="{{ $data->year}}" class="form-control input-lg span2", required>
                                        
                                    </td>
                         </tr>
                     </table>
                        <div>
                                <button type='submit' class="btn btn-primary">Create</button>
                                
                            </div>
                </form>

<!---------------------------------------------------------------------------------------------------->
                   
        </div>

      <script>
      
      </script>
@endsection