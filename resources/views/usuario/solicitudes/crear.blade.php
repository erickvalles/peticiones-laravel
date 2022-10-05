@extends('usuario.layout')

@section('contenido')

<section class="section">
    <div class="container">
       <div class="columns is-desktop is-justify-content-center">
          <div class="column is-8-desktop">
             <div class="p-6 shadow rounded content">
                <h2 class="section-title">Solicitud</h2>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="notification is-danger">
                        <button class="delete"></button>
                        {{$error}}
                      </div>
                    @endforeach
                @endif
                <form method="POST" action="{{ route('solicitud.store') }}">
                    @csrf
                   <div class="columns is-multiline">
                      <div class="form-group column is-12">
                         <label for="tramite">Seleccione el tipo de trámite</label>
                         <select id="tramite" class="input custom-select" name="tramite_id" required>
                            <option selected disabled>Elige el trámite</option>
                            @foreach ($tramites as $tramite)
                                <option value="{{$tramite->id}}">{{$tramite->nombre}}</option>
                            @endforeach
                         </select>
                      </div>
                      <div class="form-group column is-12">
                         <label for="detalle">Describa su solicitud</label>
                         <textarea name="detalle" id="detalle" class="input"
                            placeholder="Escribe aquí ...">{{old('detalle')}}</textarea>
                      </div>
                      <div class="column is-12">
                         <button type="submit" class="btn btn-primary">Guardar solicitud</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>

@stop
