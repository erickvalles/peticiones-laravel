@extends('usuario.layout')

@section('contenido')
<!-- faq -->
<section class="section pb-0">
    <div class="container">
       <h2 class="section-title">Preguntas frecuentes</h2>
       <h5 class="section-title">De la categoría: {{$categoria->nombre}}</h5>
       <div class="columns masonry-wrapper">
        @foreach ($categoria->preguntasFrecuentes as $pregunta)

          <!-- faq item -->
          <div class="column is-6-desktop">
             <div class="card card-lg">
                <div class="card-body">
                   <h3 class="card-title h5">{{$pregunta->pregunta}}</h3>
                   <p class="card-text content">{{$pregunta->respuesta}}</p>
                </div>
             </div>
          </div>
          @endforeach
       </div>

    </div>
 </section>
 <!-- /faq -->
@stop
