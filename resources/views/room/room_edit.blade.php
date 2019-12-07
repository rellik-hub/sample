@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">
        <div class="module-head">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/room_table">Room Management</a> <span class="divider">/</span></li>
                        <li class="active">Edit Room</li>
                      </ul>
            <a href="/admin/room_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
        </div>
        <div id="header" class="module">
            <div class="module-head">
                <h3>EDIT ROOM</h3>
            </div>
            <div class="module-body">

                <form  class="form-horizontal row-fluid" action="{{route('room_ctrl.update', $rooms->id )}}" method="POST">
                @csrf
                @method('PATCH')			

 
<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table>
                            

                            <tr>
                                <label class="control-label" for="basicinput" style="margin:5px">ROOM NO:</label>
                                    <div class="controls" style="margin:5px">
                                    <input type="text" id="basicinput" placeholder="" value="{{ $rooms->room_no }}" name="room_no" class="form-control input-lg span4", required>
                                            @error('room_no')
                                                <span style="color:red !important;">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </tr>

                            
                            <tr>
                            
                                <label class="control-label" for="basicinput" style="margin:5px">ROOM CAPACITY:</label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" value="{{ $rooms->room_capacity }}" name="room_capacity" class="form-control input-lg span4", required>
                                            @error('room_capacity')
                                                <span style="color:red !important;">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </tr>
                            
                            <tr>
                                <label class="control-label" for="basicinput" style="margin:5px">CLASSIFICATION:</label>
                                    <div class="controls" style="margin:5px">
                                        <select tabindex="1" data-placeholder="Select here.." value="{{ $rooms->room_classificaition }}" name="room_classification" class="form-control input-lg span2">
                                            <option value="classroom">Classroom</option>
                                            <option value="laboratory">Laboratory</option>
                                        </select>
                                        @error('room_classification')
                                            <span style="color:red !important;">{{ $message }}</span>
                                        @enderror
                                    </div>
                            </tr>


                            <tr>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-primary">Update Form</button>
                                    </div>
                                </div>
                            </tr>
    
                            </div>
                        </table>
    
    
    
                </form>
            </div>
        </div>

        
    
@endsection