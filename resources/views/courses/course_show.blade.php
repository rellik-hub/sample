@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                    <ul style="float:right;"class="breadcrumb">
                            <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                            <li><a href="/admin/course_table">Course Management</a> <span class="divider">/</span></li>
                            <li class="active">View Course</li>
                          </ul>
                <a href="/admin/course_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
            </div>
            <div class="module-body">

                <form  class="form-horizontal row-fluid" method="post" action="{{route('course_ctrl.show', $data->id)}}">
                @csrf				


                    <div class="control-group">
                        <table cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                            <thead>
                                <tr><h4>COURSE INFORMATION</h4></tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>COURSE CODE:</td>
                                    <td>{{ $data->course_code }}</td>
                                </tr>

                                <tr>
                                    <td>DESCRIPTION:</td>
                                    <td>{{ $data->course_desription }}</td>
                                </tr>

                             
                            </tbody>
                        </table>
                    </div>
                        
    
    
    
                </form>
            </div>
        </div>

        
    
@endsection