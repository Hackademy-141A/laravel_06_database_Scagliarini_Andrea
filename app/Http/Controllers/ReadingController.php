<?php

namespace App\Http\Controllers;
use app\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function create(){
        return view('reading.create');
    }

    public function store(Request $request){
        $reading = new Reading();
        //? andiamo ad utilizzare i magicmethod 
        $reading->bookName = $request->bookName;
        $reading->autor = $request->autor;
        $reading->editor = $request->editor;
        $reading->year = $request->year;
        
    }
}
