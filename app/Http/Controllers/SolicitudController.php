<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestGuardaSolicitud;
use App\Mail\NotificacionUsuario;
use App\Models\Seguimiento;
use App\Models\Solicitud;
use App\Models\Status;
use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Repositories\SolicitudRepository;

class SolicitudController extends Controller
{
    private SolicitudRepository $solicitudes;

    public function __construct(SolicitudRepository $solicitudes)
    {
        $this->solicitudes = $solicitudes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudesNuevas = $this->solicitudes->obtenerSolicitudesPorEstatus('nuevo');
        $solicitudesLeidas = $this->solicitudes->obtenerSolicitudesPorEstatus('Leído');
        $solicitudesEnProceso = $this->solicitudes->obtenerSolicitudesPorEstatus('En proceso');
        $solicitudesFinalizadas = $this->solicitudes->obtenerSolicitudesPorEstatus('Finalizado');

        return view('admin.solicitudes.index',compact('solicitudesNuevas','solicitudesLeidas','solicitudesEnProceso','solicitudesFinalizadas'));
    }

    public function solicitudesAlumno(){
        $solicitudes = $this->solicitudes->solicitudesPorAlumno(auth('alumno')->user());
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

        if($this->solicitudes->crearSolicitud($request)){
            return redirect()->route('solicitudes_alumno');
        }else{
            return redirect()->back()->withErrors(["error"=>"Error al guardar"]);
        }


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

        $datosEmail = [
            "titulo"=>"Hola ".$solicitud->solicitante->nombre,
            "cuerpo"=>"Tu solicitud ha cambiado al estatus: ".$solicitud->estatus_actual
        ];

        //Mail::to($solicitud->solicitante->correo)->send(new NotificacionUsuario($datosEmail));

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
