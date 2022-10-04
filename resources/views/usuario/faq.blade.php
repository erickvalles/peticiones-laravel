@extends('usuario.layout')

@section('contenido')
<!-- faq -->
<section class="section pb-0">
    <div class="container">
       <h2 class="section-title">Preguntas frecuentes</h2>
       <div class="columns masonry-wrapper">
        @foreach ($preguntas as $pregunta)

          <!-- faq item -->
          <div class="column is-6-desktop">
             <div class="card card-lg">
                <div class="card-body">
                   <h3 class="card-title h5">{{$pregunta->pregunta}}</h3>
                   <p class="card-text content"><a href="{{ route('categoria.show',$pregunta->categoria) }}">{{$pregunta->categoria->nombre}}</a></p>
                   <p class="card-text content">{{$pregunta->respuesta}}</p>
                </div>
             </div>
          </div>
          @endforeach
       </div>

       {!! $preguntas->links() !!}
    </div>
 </section>
 <!-- /faq -->
@stop
