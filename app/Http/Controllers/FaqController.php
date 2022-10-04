<?php

namespace App\Http\Controllers;

use App\Models\PreguntaFrec;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = PreguntaFrec::paginate(5);

        return view('usuario.faq',compact('preguntas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreguntaFrec  $preguntaFrec
     * @return \Illuminate\Http\Response
     */
    public function show(PreguntaFrec $preguntaFrec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreguntaFrec  $preguntaFrec
     * @return \Illuminate\Http\Response
     */
    public function edit(PreguntaFrec $preguntaFrec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PreguntaFrec  $preguntaFrec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreguntaFrec $preguntaFrec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreguntaFrec  $preguntaFrec
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreguntaFrec $preguntaFrec)
    {
        //
    }
}
