<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PDSStore;
use Illuminate\Routing\Redirector;
use App\PersonalDataSheet;


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

        PersonalDataSheet::create($request->all());
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
        return view('table.table_show', compact('data'));    
    }


}
