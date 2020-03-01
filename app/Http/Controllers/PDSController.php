<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PDSStore;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;
use App\PersonalDataSheet;
use App\Users;
use DB;                            


class PDSController extends Controller
{
    public function index(){
        $data = PersonalDataSheet::latest()->paginate(5);
        return view('admin panel.index', compact('data'))
                ->with('i', (request()->input('page', 1) -1) *5);
    }

    public function create(){
        
        return view('admin panel.form');
    }

    public function store(Request $request){
        $name = $request->input('first_name');
        $username = $request->input('username');
        $password = $request->input('password');
        $user_info = array ('name' => $name, 'username' => $username, 'password' => Hash::make($request['password']));
        PersonalDataSheet::create($request->all());

        DB::table('users')->insert($user_info);
        return redirect('/admin/table')->with('data saved successfully');
    }

    public function edit($id){
        $data = PersonalDataSheet::find($id);
        return view('table.table_edit', compact('data'));     
     }
 
       
     public function update (Request $request, $id){
         
        $data = PersonalDataSheet::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('/admin/table')->with('data updated');
    }

    public function destroy ($id){
            $data = PersonalDataSheet::find($id);
            $data->delete($id);
            return redirect()->route('admin.table')->with('success','Data deleted successfully');
    }

    public function show(Request $request, $id){   
        $data = PersonalDataSheet::find($id);
        return view('table/table_show', compact('data'));    
    }


}
