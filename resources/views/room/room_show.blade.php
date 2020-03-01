@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
            <div class="module-head">
                    <ul style="float:right;"class="breadcrumb">
                            <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                            <li><a href="/admin/room_table">Room Management</a> <span class="divider">/</span></li>
                            <li class="active">View Room</li>
                          </ul>
                <a href="/admin/room_table"><button type="button" name="back" class="btn btn-primary">&laquoBACK</button></a>
            </div>
            <div class="module-body">

                <form  class="form-horizontal row-fluid" method="post" action="{{route('room_ctrl.show', $rooms->id)}}">
                @csrf				


<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                            <thead>
                                <tr><h3>ROOM INFORMATION</h3></tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>ROOM NO:</td>
                                    <td>{{ $rooms->room_no }}</td>
                                </tr>

                                <tr>
                                    <td>ROOM CAPACITY:</td>
                                    <td>{{ $rooms->room_capacity }}</td>
                                </tr>

                                <tr>
                                    <td>ROOM CLASSIFICATION:</td>
                                    <td>{{ $rooms->room_classification }}</td>
                                </tr>

                            </tbody>

                            </div>
                        </table>
    
    
    
                </form>
            </div>
        </div>

        
    
@endsection