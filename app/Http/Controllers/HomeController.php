<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Item;
use App\Slider;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories =Category::all();
        $items =Item::all();
        $sliders =Slider::all();
        
        return view('index')->with([
            'categories' => $categories,
            'items' => $items,
            'sliders' => $sliders
        ]);
        
    }
    
}
