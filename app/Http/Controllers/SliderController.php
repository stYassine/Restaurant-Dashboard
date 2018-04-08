<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use Session;
use File;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders =Slider::all();
        
        return view('admin.sliders.index')->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
            'title' => 'required|min:3|max:255',
            'sub_title' => 'required|min:3|max:255',
            'image' => 'required'
        ]);
        
        $slider =new Slider();
        $slider->title =$request->title;
        $slider->sub_title =$request->sub_title;
        if($file =$request->file('image')){
        
            $image =$request->file('image');
            $image_name =time().$image->getClientOriginalName();
            $image->move('uploads/sliders');
            
            $slider->image =$request->image;
        }
        $slider->save();
        
        Session::flash('slider_created', 'Slider Created Successfully');
        
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
        $slider =Slider::find($id);
        
        return view('admin.sliders.edit')->with('slider', $slider);
        
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
        
        $this->validate($request, [
            'title' => 'required|min:3|max:255',
            'sub_title' => 'required|min:3|max:255',
            'image' => 'required'
        ]);
        
        $slider =Slider::find($id);
        $slider->title =$request->title;
        $slider->sub_title =$request->sub_title;
        if($file =$request->file('image')){
        
            File::delete($slider->image);
            
            $image =$request->file('image');
            $image_name =time().$image->getClientOriginalName();
            $image->move('uploads/sliders');
            
            $slider->image =$request->image;
            
        }
        $slider->save();
        
        Session::flash('slider_updated', 'Slider Updated Successfully');
        
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider =Slider::find($id);
        File::delete($slider->image);
        $slider->delete();
        
        Session::flash('slider_deleted', 'Slider Deleted Successfully');
        
        return redirect()->back();
        
    }
    
    
}
