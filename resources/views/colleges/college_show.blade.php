@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                    <ul style="float:right;"class="breadcrumb">
                            <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                            <li><a href="/admin/college_table">College Management</a> <span class="divider">/</span></li>
                            <li class="active">View College</li>
                          </ul>
                <a href="/admin/college_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
            </div>
            <div class="module-body">

                <form  class="form-horizontal row-fluid" method="post" action="{{route('college_ctrl.show', $data->id)}}">
                @csrf				


<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                            <thead>
                                <tr><h3>COLLEGE INFORMATION</h3></tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>ACRONYM:</td>
                                    <td>{{ $data->college_acronym }}</td>
                                </tr>

                                <tr>
                                    <td>DESCRIPTION:</td>
                                    <td>{{ $data->college_description }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        
    
    
    
                </form>
            </div>
        </div>

        
    
@endsection