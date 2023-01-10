<table id="tabla_solicitudes" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Detalle</th>
        <th>Fecha</th>
        <th>Estatus</th>
        <th>Solicitante</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($solicitudes as $solicitud)
        <tr>
            <td>{{$solicitud->id}}</td>
            <td>{{$solicitud->detalle}}</td>
            <td>{{$solicitud->created_at}}</td>
            <td>{{$solicitud->estatus_actual}}</td>
            <td>{{$solicitud->solicitante->nombre_completo}}</td>
            <td>
                <a href="{{route('solicitud.edit',$solicitud)}}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Detalle</th>
        <th>Fecha</th>
        <th>Estatus</th>
        <th>Solicitante</th>
        <th>Acciones</th>
    </tr>
    </tfoot>
</table>
