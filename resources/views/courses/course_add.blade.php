@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">
        <div class="module-head">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/course_table">Course Management</a> <span class="divider">/</span></li>
                        <li class="active">Add Course</li>
                      </ul>
            <a href="/admin/course_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
        </div>
        <div id="header" class="module">
            <div class="module-head">
                <h3>ADD COURSE</h3>
            </div>
            <div class="module-body">

            <form  class="form-horizontal row-fluid" method="post" action="{{route('course_ctrl.store')}}">
                @csrf				


<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table>
                            
                            <tr>
                            
                                <label class="control-label" for="basicinput" style="margin:5px">COURSE CODE:  </label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" name="course_code" class="form-control input-lg span2", required>
                                            @error('course_code')
                                                <span style="color:red !important;">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </tr>
                           

                            <tr>
                                <label class="control-label" for="basicinput" style="margin:5px">COURSE DESCRIPTION:  </label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" name="course_desription" class="form-control input-lg span8", required>
                                            @error('course_desription')
                                                 <span style="color:red !important;">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </tr>


                            <tr>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </tr>
    
                            </div>
                        </table>
    
    
    
                </form>
            </div>
        </div>

        
    
@endsection