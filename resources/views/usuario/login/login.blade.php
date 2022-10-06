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
                <form method="POST" action="{{ route('alumnos.login') }}">
                    @csrf
                   <div class="columns is-multiline">
                    <div class="form-group column is-12-desktop">
                        <label for="correo">Correo electrónico</label>
                        <input type="text" class="input" id="correo" name="correo" placeholder="Ingresa tu correo electrónico"
                           required>
                     </div>
                     <div class="form-group column is-12-desktop">
                        <label for="password">Contraseña</label>
                        <input type="password" class="input" id="password" name="password" placeholder="Ingresa tu contraseña">
                     </div>
                      <div class="column is-12">
                         <button type="submit" class="btn btn-primary is-fullwidth">Iniciar sesión</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>

@stop
