@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">
        <div class="module-head">
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/section_table">Section Management</a> <span class="divider">/</span></li>
                        <li class="active">Add Section</li>
                      </ul>
            <a href="/admin/section_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
        </div>
        <div id="header" class="module">
            <div class="module-head">
                <h3>ADD SECTION</h3>
            </div>
            <div class="module-body">

                <form  class="form-horizontal row-fluid" method="post" action="{{route('section_ctrl.store')}}">
                @csrf		
                		
 

<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table>
                            

                            <tr>
                                <label class="control-label" for="basicinput" style="margin:5px">SECTION:</label>
                                    <div class="controls" style="margin:5px">
                                        <input type="text" id="basicinput" placeholder="" name="section" class="form-control input-lg span4", required>
                                            @error('section')
                                                <span style="color:red !important;">{{ $message }}</span>
                                            @enderror
                                    </div>
                            </tr>

                            
                            <tr>
                            
                                <label class="control-label" for="basicinput" style="margin:5px">PROGRAMME:</label>
                                    <div class="controls" style="margin:5px">
                                        <select tabindex="" data-placeholder="Select here.." name="programme" class="form-control input-lg span2">
                                            <option value="">Select</option>
                                            @foreach( $programmes as $programme)
                                                 <option value="{{ $programme->programme_acronym }}">{{ $programme->programme_acronym }}</option>
                                             @endforeach
                                         </select>
                                    </div>
                            </tr>
                            
                            <tr>
                                <label class="control-label" for="basicinput" style="margin:5px">YEAR LEVEL:</label>
                                    <div class="controls" style="margin:5px">
                                        <select tabindex="" data-placeholder="Select here.." name="year_level" class="form-control input-lg span2">
                                            <option value="">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        @error('year_level')
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