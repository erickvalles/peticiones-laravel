@extends('usuario.layout')

@section('contenido')

<section class="section">
    <div class="container">
       <div class="columns is-desktop is-justify-content-center">
          <div class="column is-8-desktop">
             <div class="p-6 shadow rounded content">
                <h5 id="tables">Solicitudes</h5>
                <p>Histórico de tus solicitudes</p>
                <table>
                   <thead>
                      <tr>
                         <th>#</th>
                         <th>Fecha</th>
                         <th>Detalles</th>
                         <th>Estatus actual</th>
                      </tr>
                   </thead>
                   <tbody>
                    @forelse($solicitudes as $solicitud)
                        <tr>
                            <td>{{$solicitud->id}}</td>
                            <td>{{$solicitud->created_at}}</td>
                            <td>{{$solicitud->detalle}}</td>
                            <td>{{$solicitud->estatus_actual}}</td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="4">No hay solicitudes realizadas</td>
                    </tr>
                    @endforelse
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </section>

@stop
