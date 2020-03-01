<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Colleges;

class CollegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('colleges.college_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Colleges::create($request->all());
        return redirect('/admin/college_table')->with('data saved successfully');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show($id)
    {
        $data = Colleges::find($id);
        return view('colleges.college_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Colleges::find($id);
        return view('colleges.college_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request, $id)
    {
        $data = Colleges::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('/admin/college_table')->with('data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Colleges::find($id);
        $data->delete();
        return redirect()->route('admin panel.college_table')->with('success','Data deleted successfully');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $post = Colleges::where('college_acronym', 'like', '%'.$search.'%')
                                    ->orWhere('college_description', 'like', '%'.$search.'%')
                                    ->paginate(10);
        return view('admin/college_table', ['post' => $post]);
    }
}
