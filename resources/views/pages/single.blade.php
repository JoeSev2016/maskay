<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Maskay</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> --}}
        
        <!-- CSS Files -->
        {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/> --}}

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="/assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="/assets/demo/demo.css" rel="stylesheet" />
    </head>
    <body class="landing-page">

        {{-- Navegacion --}}
        <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
                  Maskay </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                  {{-- <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <i class="material-icons">apps</i> Components
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                      <a href="../index.html" class="dropdown-item">
                        <i class="material-icons">layers</i> All Components
                      </a>
                      <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                        <i class="material-icons">content_paste</i> Documentation
                      </a>
                    </div>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      {{-- <i class="material-icons">cloud_download</i> --}} Buscar Servicios
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      {{-- <i class="material-icons">cloud_download</i> --}} Sobre Nosotros
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li> --}}
                </ul>
                <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                      {{-- <i class="material-icons">cloud_download</i> --}} Iniciar Sesion
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="page-header header-filter" data-parallax="true" style="background-image: url('http://placeimg.com/900/400/tech')">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="title">Bienvenidos a Maskay</h1>
              <h4>Busque y encuentre los servicios que necesite ahora</h4>
              <br>
              {{-- <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                <i class="fa fa-play"></i> Watch video
              </a> --}}
            </div>
          </div>
        </div>
      </div>

        {{-- Cuerpo --}}
        <div class="main main-raised">
            <div class="container">
              <div class="section text-center">
                {{-- <div class="row">
                  <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Let&apos;s talk product</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
                  </div>
                </div> --}}
                <div class="features">
                  <div class="row">
                    <div class="col-md-12 col-lg-4">
                      <h1>{{ $advert->title }}</h1>
                      <p>{!! $advert->body !!}</p>
                      <hr>
                      <div class="etiquetas">
                        Etiquetas:
                        @foreach ($advert->tags as $tag)
                           <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                      </div>
                      <hr>
                      <p>Publicado en: {{ $advert->category->name }}</p>
                    </div>
                    <div class="col-md-12 col-lg-8">
                      <div class="card">
                        <div class="card-header card-header-danger">
                          <h4 class="card-title">Imagenes del Anuncio "{{ $advert->title }}"</h4>
                        </div>
                        <div class="card-body">
                          <div class="row">
                          @foreach ($advertImages as $image)
                            <div class="col-sm-6 col-md-6 mb-2">
                                <div class="thumbnail">
                                  <img class="img-fluid" src="{{ url('/storage/adverts/' . $advert->slug . '/' . $image->image) }}" alt="Card image cap">
                                </div>  
                            </div>  
                          @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- Fila de Caracteristicas --}}
                  </div>
                </div>
              </div>

            </div>
          </div>
          {{-- Pie --}}
          <footer class="footer footer-default">
            <div class="container">
              <nav class="float-left">
                <ul>
                  <li>
                    <a href="https://www.creative-tim.com">
                      Creative Tim
                    </a>
                  </li>
                  <li>
                    <a href="https://creative-tim.com/presentation">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/license">
                      Licenses
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright float-right">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
              </div>
            </div>
          </footer>
    </body>

    <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="/assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>

</html>
