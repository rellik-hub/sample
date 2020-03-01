<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Http\Request\RoomRequest;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::latest()->paginate(5);
  
        return view('admin panel.room_table',compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('room.room_add');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Room $rooms, Request $request){
        $request->validate([
            'room_no' => 'required',
            'room_capacity' => 'required',
            'room_classification' => 'required',
        ]);
  
        Room::create($request->all());
   
        return redirect()->route('admin.room_table')
                        ->with('success','Room created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $rooms, $id){
        
        $rooms = Room::find($id);
        return view('room.room_show', compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $rooms = Room::find($id);
        return view('room.room_edit',compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
         
        $rooms = Room::find($id);
        $input = $request->all();
        $rooms->update($input);
        return redirect()->route('admin.room_table')
                        ->with('success','Room updated successfully');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $rooms = Room::find($id);
        $rooms->delete();
        return redirect()->route('/admin/room_table')->with('success','Data deleted successfully');
    }


    
    
}
