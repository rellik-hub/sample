@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">
        <div class="module-head">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/programme_table">Program Management</a> <span class="divider">/</span></li>
                        <li class="active">Add Program</li>
                      </ul>
            <a href="/admin/programme_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
        </div>
        <div id="header" class="module">
            <div class="module-head">
                <h3>ADD PROGRAM</h3>
            </div>
            <div class="module-body">

            <form action="{{route('programme_ctrl.store')}}"  class="form-horizontal row-fluid" method="post">
                @csrf				


<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table>
                            

                            <tr>
                                <label class="control-label" for="basicinput" style="margin:5px">ACRONYM:</label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" name="programme_acronym" class="form-control input-lg span3", required>
                                            @error('programme_acronym')
                                                <span style="color:red !important;">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </tr>

                            
                            <tr>
                            
                                <label class="control-label" for="basicinput" style="margin:5px">DESCRIPTION:</label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" name="programme_description" class="form-control input-lg span8", required>
                                            @error('programme_description')
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