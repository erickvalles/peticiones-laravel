@extends('admin.layout')

@section('admin_content')
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Solicitud de {{$solicitud->solicitante->nombre_completo}}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
                <label for="detalle_solicitud">Detalle de la solicitud</label>
                <textarea id="detalle_solicitud" class="form-control" rows="4" disabled>{{$solicitud->detalle}}</textarea>
            </div>
            <div class="form-group">
              <label for="notas">Notas</label>
              <textarea id="notas" name="notas" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="estatus">Estatus</label>
              <select id="estatus" name="estatus" class="form-control custom-select">
                <option selected disabled>Seleccione un estatus</option>
                @foreach ($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                @endforeach

            </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Historial de cambios</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <table id="tabla_solicitudes" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Estatus</th>
                  <th>Nota</th>
                </tr>
                </thead>
                <tbody>
                @foreach($solicitud->cambios as $cambio)
                <tr>
                  <td>{{$cambio->created_at}}</td>
                  <td>{{$cambio->status->nombre}}</td>
                  <td>{{$cambio->nota}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create new Project" class="btn btn-success float-right">
      </div>
    </div>

@stop
