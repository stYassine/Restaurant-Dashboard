<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;

use Session;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations =Reservation::all();
        
        return view('admin.reservations.index')->with('reservations', $reservations);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'date_and_time' => 'required',
            'message' => 'required|min:3'
        ]);
        
        $reservation =new Reservation;
        $reservation->status =0;
        $reservation->name =$request->name;
        $reservation->email =$request->email;
        $reservation->phone =$request->phone;
        $reservation->date_and_time =$request->date_and_time;
        $reservation->message =$request->message;
        $reservation->save();
        
        
        Session::flash('reservation_created', 'Reservation Created Successfully');

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation =Reservation::find($id);
        $reservation->delete();
        
        Session::flash('reservation_deleted', 'Reservation Deleted Successfully');

        return redirect()->back();
        
    }
    
}
