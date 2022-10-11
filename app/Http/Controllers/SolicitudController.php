<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestGuardaSolicitud;
use App\Models\Seguimiento;
use App\Models\Solicitud;
use App\Models\Status;
use App\Models\Tramite;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth:alumno')->only(['create']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::with('solicitante')->get();

        return view('admin.solicitudes.index',compact('solicitudes'));
    }

    public function solicitudesAlumno(){
        $solicitudes = auth('alumno')->user()->solicitudes;
        //dd($solicitudes[3]->ultimoCambio);
        return view('usuario.solicitudes.listar',compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tramites = Tramite::all(['id','nombre']);

        return view('usuario.solicitudes.crear',compact('tramites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestGuardaSolicitud $request)
    {

        //dd(auth('alumno')->user());
        $solicitud = new Solicitud();
        $solicitud->detalle = $request["detalle"];
        $solicitud->estatus_actual = "nuevo";
        $solicitud->archivo = "";
        $solicitud->tramite_id = $request["tramite_id"];
        $solicitud->alumno_id = auth('alumno')->user()->id;

        $solicitud->save();

        return redirect()->route('solicitudes_alumno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $solicitud)
    {
        $estados = Status::all();
        if($solicitud->estatus_actual == 'nuevo'){
            $cambio = new Seguimiento([
                'nota'=>"Leído por el coordinador",
                'status_id'=>2//leído
            ]);
            $solicitud->cambios()->save($cambio);
            $solicitud->estatus_actual = "Leído";
            $solicitud->save();
        }

        return view('admin.solicitudes.seguimiento',compact('solicitud','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $cambio = new Seguimiento([
            'nota'=>$request->notas,
            'status_id'=>$request->estatus
        ]);
        $solicitud->cambios()->save($cambio);
        $estado = Status::find($request->estatus);
        $solicitud->estatus_actual = $estado->nombre;
        $solicitud->save();
        return redirect()->route('solicitud.edit',$solicitud);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
