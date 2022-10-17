<?php
namespace App\Repositories;

use App\Models\Alumno;
use App\Models\Solicitud;

class SolicitudRepository{

    public function obtenerTodasSolicitudes(){
        return Solicitud::with('solicitante')->get();
    }

    public function solicitudesPorAlumno(Alumno $alumno){
        return $alumno->solicitudes;
    }

    public function crearSolicitud($request){
        $solicitud = new Solicitud();
        $solicitud->detalle = $request["detalle"];
        $solicitud->estatus_actual = "nuevo";
        $solicitud->archivo = "";
        $solicitud->tramite_id = $request["tramite_id"];
        $solicitud->alumno_id = auth('alumno')->user()->id;

        return $solicitud->save();
    }
}
