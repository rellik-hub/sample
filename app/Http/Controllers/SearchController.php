<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checked_course_id;
use DB;
class SearchController extends Controller
{
    public function index() {
        $checked_course_id = Checked_course_id::all();
        return view('scheduler.schedule_add', compact('checked_course_id'));
    }

    public function search(Request $request) {
        
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('checklist')
                    ->where('programme', 'like', '%'.$query.'%')
                    ->orWhere('year_level', 'like', '%'.$query.'%')
                    ->orWhere('semester', 'like', '%'.$query.'%')
                    ->select('id')
                    ->get();

            $find = DB::table('checked_course_id')->where('checklist_id', '=', $data)->get();
                
            }
            
            $total_row = $find->count();
            $i = 1;
            if($total_row > 0) {
                foreach($find as $row){
                    $output .= '
                    <tr>
                    <td>'.$i.'</td>
                    <td>'.$row->course_code.'</td>
                    <td>'.$row->course_desription.'</td>
                    
                    </tr>
                    .';
                    $i++;
                }
            }
            else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }

            $find = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($find);
        }
    }
}
