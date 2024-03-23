<?php

namespace App\Http\Controllers;
use app\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function index(){
        $reading = Reading::all();
        dd($reading);
        return view('reading.index', compact('reading'));
    }
    public function create(){
        return view('reading.create');
    }

    public function store(Request $request){
        //$reading = new Reading();
        //? andiamo ad utilizzare i magicmethod 
        //$reading->bookName = $request->bookName;
        //$reading->autor = $request->autor;
        //$reading->editor = $request->editor;
        //$reading->year = $request->year;

        //$reading->save();
        
        //mass assignement
        $reading = Reading::create([
            'bookname'=> $request->bookName,
            'autor' => $request->autor,
            'editor' => $request->editor,
            'year' => $request->year,
        ]);

        return redirect(route('homepage'))->with('message', 'titolo inserito con successo');
    }

    }

