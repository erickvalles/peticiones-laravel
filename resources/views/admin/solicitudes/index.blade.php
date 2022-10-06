@extends('admin.layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">

      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="m-0">Solicitudes nuevas</h5>
        </div>
        <div class="card-body">
            <table id="tabla_solicitudes" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Detalle</th>
                  <th>Fecha</th>
                  <th>Estatus</th>
                  <th>Solicitante</th>
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
                </tr>
                </tfoot>
              </table>
        </div>
      </div>
    </div>
    <!-- /.col-md-6 -->
  </div>
@stop


@push('estilos')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush


@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
    $(function () {
      $("#tabla_solicitudes").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tabla_solicitudes_wrapper .col-md-6:eq(0)');
    });
  </script>

@endpush
