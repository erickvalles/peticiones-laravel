<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>{{config('app.name')}}</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- plugins -->
  <link rel="stylesheet" href="{{asset('usuario/plugins/bulma/bulma.min.css')}}">
  <link rel="stylesheet" href="{{asset('usuario/plugins/themify-icons/themify-icons.css')}}">
  <!-- Main Stylesheet -->
  <link href="{{asset('usuario/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('usuario/images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('usuario/images/favicon.ico')}}" type="image/x-icon">

</head>

<body>

<nav class="navbar is-sticky-top navigation" role="navigation" aria-label="main navigation">
   <div class="container">
      <div class="navbar-brand">
         <a class="navbar-item" href="index.html">
            <img class="img-fluid" src="{{asset('usuario/images/logo.png')}}" alt="godocs" width="155px">
         </a>

         <a role="button" class="navbar-burger burger" aria-expanded="false" data-target="navbar-links">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
         </a>
      </div>

      <div id="navbar-links" class="navbar-menu">
         <div class="navbar-start ml-auto">
            <a class="navbar-item" href="index.html">Inicio</a>
            <a class="navbar-item" href="list.html">Solicitudes</a>
            <a class="navbar-item" href="search.html">Preguntas frecuentes</a>
            <a class="navbar-item" href="search.html">Mensajes</a>
         </div>

         <div class="navbar-end ml-0">
            <div class="navbar-item py-0">
               <a href="changelog.html" class="btn btn-sm btn-outline-primary ml-4">Iniciar sesión</a>
               <a href="contact.html" class="btn btn-sm btn-primary ml-4">Nueva solicitud</a>
            </div>
         </div>
      </div>
   </div>
</nav>

@yield('contenido')

<footer>
   <div class="container">
      <div class="columns is-multiline is-align-items-center border-bottom py-5">
         <div class="column is-4-desktop is-12-tablet">
            <ul class="list-inline footer-menu has-text-centered has-text-left-desktop">
               <li class="list-inline-item"><a href="changelog.html">Changelog</a></li>
               <li class="list-inline-item"><a href="contact.html">contact</a></li>
               <li class="list-inline-item"><a href="search.html">Search</a></li>
            </ul>
         </div>
         <div class="column is-4-desktop is-12-tablet">
            <a class="navbar-brand is-justify-content-center" href="index.html">
               <img class="img-fluid" src="{{asset('usuario/images/logo.png')}}" alt="Hugo documentation theme">
            </a>
         </div>
         <div class="column is-4-desktop is-12-tablet">
            <ul class="list-inline social-icons has-text-right-desktop has-text-centered">
               <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
               <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
         </div>
      </div>
      <div class="py-4 has-text-centered">
         <small class="text-light">Copyright © 2020 - Design &amp; Developed by <a href="https://themefisher.com">themefisher</a></small>
      </div>
   </div>
</footer>

<!-- plugins -->
<script src="{{asset('usuario/plugins/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('usuario/plugins/masonry/masonry.min.js')}}"></script>
<script src="{{asset('usuario/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('usuario/plugins/match-height/jquery.matchHeight-min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('usuario/js/script.js')}}"></script>

</body>
</html>
