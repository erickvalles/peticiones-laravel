@extends('admin.layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">

      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="m-0">Solicitudes</h5>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Nuevas</button>
            </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-leidas-tab" data-toggle="pill" data-target="#pills-leidas" type="button" role="tab" aria-controls="pills-leidas" aria-selected="true">Leídas</button>
              </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">En proceso</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Concluidas</button>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                @include('admin.solicitudes.components.tabla', ['solicitudes'=>$solicitudesNuevas])
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                @include('admin.solicitudes.components.tabla', ['solicitudes'=>$solicitudesEnProceso])
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                @include('admin.solicitudes.components.tabla', ['solicitudes'=>$solicitudesFinalizadas])
            </div>
              <div class="tab-pane fade" id="pills-leidas" role="tabpanel" aria-labelledby="pills-leidas-tab">
                  @include('admin.solicitudes.components.tabla', ['solicitudes'=>$solicitudesLeidas])
              </div>
          </div>

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
