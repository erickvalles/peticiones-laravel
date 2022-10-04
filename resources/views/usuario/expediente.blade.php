@extends('usuario.layout')

@section('contenido')
<!-- banner -->
<section class="section pb-0">
    <div class="container">
       <div class="columns is-justify-content-space-between is-align-items-center">
          <div class="column is-7-desktop has-text-centered-mobile has-text-centered-tablet has-text-left-desktop">
             <h1 class="mb-4">Documentation Theme By Themefisher Team</h1>
             <p class="mb-4">Lorem ipsum dolor amet, consetetur sadiffspscing elitr, diam nonumy invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua At.</p>
             <form class="search-wrapper" action="search.html">
                <input id="search-by" name="s" type="search" class="input input-lg"
                   placeholder="Search Here...">
                <button type="submit" class="btn btn-primary">Search</button>
             </form>
          </div>
          <div class="column is-4-desktop hidden-on-tablet">
             <img src="usuario/images/banner.jpg" alt="illustration" class="img-fluid">
          </div>
       </div>
    </div>
 </section>
 <!-- /banner -->

 <!-- topics -->
 <section class="section pb-0">
    <div class="container">
       <h2 class="section-title">Bcolumnsse Your Topics</h2>
       <div class="columns is-multiline">
          <!-- topic -->
          <div class="column is-3-widescreen is-4-desktop is-6-tablet">
             <div class="card match-height">
                <div class="card-body">
                   <i class="card-icon ti-panel mb-5"></i>
                   <h3 class="card-title h4">Basic Startup</h3>
                   <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                   <a href="list.html" class="stretched-link"></a>
                </div>
             </div>
          </div>
          <!-- topic -->
          <div class="column is-3-widescreen is-4-desktop is-6-tablet">
             <div class="card match-height">
                <div class="card-body">
                   <i class="card-icon ti-credit-card mb-5"></i>
                   <h3 class="card-title h4">Account Bill</h3>
                   <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                   <a href="list.html" class="stretched-link"></a>
                </div>
             </div>
          </div>
          <!-- topic -->
          <div class="column is-3-widescreen is-4-desktop is-6-tablet">
             <div class="card match-height">
                <div class="card-body">
                   <i class="card-icon ti-package mb-5"></i>
                   <h3 class="card-title h4">Our Features</h3>
                   <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                   <a href="list.html" class="stretched-link"></a>
                </div>
             </div>
          </div>
          <!-- topic -->
          <div class="column is-3-widescreen is-4-desktop is-6-tablet">
             <div class="card match-height">
                <div class="card-body">
                   <i class="card-icon ti-settings mb-5"></i>
                   <h3 class="card-title h4">Theme Facility</h3>
                   <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                   <a href="list.html" class="stretched-link"></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- /topics -->



 <!-- call to action -->
 <section class="section">
    <div class="container">
       <div class="columns is-align-items-center">
          <div class="column is-4-desktop has-text-centered hidden-on-tablet">
             <img src="usuario/images/cta-illustration.jpg" class="img-fluid" alt="">
          </div>
          <div class="column is-8-desktop has-text-centered-mobile has-text-centered-tablet has-text-left-desktop">
             <h2 class="mb-3">Still Didn&rsquo;t Find Your Answer?</h2>
             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam <br> nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam</p>
             <a href="contact.html" class="btn btn-primary">Submit a ticket</a>
          </div>
       </div>
    </div>
 </section>
 <!-- /call to action -->
@stop
