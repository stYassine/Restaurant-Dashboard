<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Category;

use Session;
use File;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items =Item::all();
        
        return view('admin.items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::all();
        
        return view('admin.items.create')->with('categories', $categories);
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
            'category_id' => 'required|integer',
            'name' => 'required|min:3|max:255',
            'image' => 'required',
            'price' => 'required',
            'description' => 'required|min:3'
        ]);
        
        $item =new Item;
        
        if($image =$request->file('photo')){
        
            $image_name =time().$image->getClientOriginalName();
            $image->move('uploads/items', $image_name);
            
            $item->image ='uploads/items/'.$image_name;
            
        }
        
        
        $item->category_id =$request->category_id;
        $item->name =$request->name;
        $item->price =$request->price;
        $item->description =$request->description;
        $item->save();
        
        
        Session::flash('item_created', 'Item Created Successfully');

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
        $item =Item::find($id);
        $categories =Category::all();
        
        return view('admin.items.edit')->with([
            'item' => $item,
            'categories' => $categories
        ]);
        
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
            'category_id' => 'required|integer',
            'name' => 'required|min:3|max:255',
            'price' => 'required',
            'description' => 'required|min:3'
        ]);
        
        $item =Item::find($id);
        
        if($image =$request->file('photo')){
        
            File::delete($item->image);
            
            $image_name =time().$image->getClientOriginalName();
            $image->move('uploads/items', $image_name);
            
            $item->image ='uploads/items/'.$image_name;
            
        }
        /** CHECK FIRST */
        
        
        $item->category_id =$request->category_id;
        $item->name =$request->name;
        $item->price =$request->price;
        $item->description =$request->description;
        $item->save();
        
        
        Session::flash('item_updated', 'Item Updated Successfully');

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
        
        $item =Item::find($id);
        File::delete($item->image);
        $item->delete();
        
        Session::flash('item_deleted', 'Item Deleted Successfully');

        return redirect()->back();
        
    }
}
