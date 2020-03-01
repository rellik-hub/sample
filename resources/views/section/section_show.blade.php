@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                    <ul style="float:right;"class="breadcrumb">
                            <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                            <li><a href="/admin/section_table">Section Management</a> <span class="divider">/</span></li>
                            <li class="active">View Section</li>
                          </ul>
                <a href="/admin/section_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
            </div>
            <div class="module-body">

                <form  class="form-horizontal row-fluid" method="post" action="{{route('section_ctrl.show', $data->id)}}">
                @csrf				


<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                            <thead>
                                <tr><h3>SECTION INFORMATION</h3></tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>SECTION:</td>
                                    <td>{{ $data->section }}</td>
                                </tr>

                                <tr>
                                    <td>PROGRAMME:</td>
                                    <td>{{ $data->programme }}</td>
                                </tr>

                                <tr>
                                    <td>YEAR LEVEL:</td>
                                    <td>{{ $data->year_level }}</td>
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>
                        
    
    
    
                </form>
            </div>
        </div>

        
    
@endsection