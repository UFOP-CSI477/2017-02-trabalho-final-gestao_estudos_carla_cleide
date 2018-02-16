<?php

namespace App\Http\Controllers;

use App\Disciplina1;
use Illuminate\Http\Request;

class Disciplina1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {               
        
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disciplina1  $disciplina1
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina1 $disciplina1)
    {
       /* $disciplina1 = $results = Disciplina1::select('select * from disciplina where id = ?', array(1));*/
        $disciplina1 = $results = Disciplina1::where('id', 1)->get();
        
        return view('disciplina1')->with('disciplina', $disciplina1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina1  $disciplina1
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina1 $disciplina1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina1  $disciplina1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina1 $disciplina1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina1  $disciplina1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina1 $disciplina1)
    {
        //
    }
}
