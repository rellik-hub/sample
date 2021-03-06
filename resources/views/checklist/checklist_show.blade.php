@extends('layouts.admin_layout')

@section('content')

<div class="span9">
    <div class="content" style="float:align-left">

        <div id="header" class="module">
                
                <ul style="float:right;"class="breadcrumb">
                        <li><a href="/home">Dashboard</a> <span class="divider">/</span></li>
                        <li><a href="/admin/checklist">Checklist Management</a> <span class="divider">/</span></li>
                        <li class="active">View Checklist</li>
                      </ul>
            <div class="module-head">
                    
                    <h3>VIEW CHECKLIST</h3>
            </div>
            <div id="print_table" class="module-body">

                <form  class="form-horizontal row-fluid" method="post" action="{{route('checklist_ctrl.show', $data->id)}}">
                @csrf				


<div class="header">
<h3></h3>
</div>
                    <div class="control-group">
                        <table id="checklist_show_table" cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                            <thead>
                               
                            </thead>
                            <tbody> 
                                <tr>
                                    
                                    <td>&nbsp;&nbsp;<strong>Program & Year :</strong>&nbsp;&nbsp;<u>{{ $data->programme }}&nbsp;{{ $data->year_level }}</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Semester:</strong>&nbsp;<u>{{ $data->semester }}</u>&nbsp;&nbsp;&nbsp;<strong>Curriculum:</strong>&nbsp;<u>{{ $data->curriculum }}</u>&nbsp;&nbsp;&nbsp;<strong>Year:</strong>&nbsp;<u>{{ $data->year }}</u></td>
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>

               
                </form>

                
                    <div class="control-group"> 
                        <table id="checklist_show_table2" cellpadding="0" cellspacing="10" border="0" class="datatable-1 table table-bordered table-striped table-fixed display" width="100%">
                            <thead>
                                    
                                <tr>
                                    <td><strong>#<strong></td>
                                    <td><strong>CODE</strong></td>
                                    <td><strong>DESCRIPTION</strong></td>
                                    <td><strong>LEC</strong></td>
                                    <td><strong>LAB<strong></td>
                                    <td><strong>UNIT<strong></td>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                  
                                @foreach($check as $key => $value)
                                    <tr class="odd">
                                        <td>{{$key += 1}}</td>
                                        <td>{{ $value->course_code }}</td>
                                        <td>{{ $value->course_desription }}</td>
                                        <td>{{ $value->lecture}}</td>
                                        <td>{{ $value->laboratory}}</td>
                                        <td>{{ $value->units}}</td> 
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                    <div id="units"></div>

                   
            </div>
           
        </div>
        <div>
            <a id="print" class="btn btn-success">PRINT</a>
        </div>

        <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="path_to/jquery-printme.js"></script>
        
        <script type="text/javascript">
        
        $(document).ready(function(){
            
            function printData()
            {
            var divToPrint=document.getElementById("print_table");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();

          
            }


            $('#print').on('click',function(){
            printData();
            })

            
                var total_units = {!! json_encode($check, JSON_HEX_TAG) !!};
               
                    var tr ='<h5>'+ '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL:&nbsp;&nbsp;' + total_units[0].total_units +'</h5>';
                    $("#units").append(tr);
               
           
           
        });

        

        </script>
    
@endsection