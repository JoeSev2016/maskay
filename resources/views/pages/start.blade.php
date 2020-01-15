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

        {{-- Banner --}}
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
              <div class="section">
                <div class="row">
                  @include('partials._message')
                  <div class="col-md-12 ml-auto mr-auto">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Busque el servicio que necesite</h4>
                        {{-- <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6> --}}
                        <form action="{{ url('/search') }}" method="get" class="form-row">
                          <div class="col">
                            <input type="text" placeholder="Ingrese palabra clave" class="form-control" name="texto">
                          </div>
                          <div class="col">
                            <select name="category_id" class="form-control" id="select-department">
                              <option value="">Seleccione Categoria</option>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          {{-- <div class="col">
                            <select name="department_id" class="form-control" id="select-department">
                              <option value="">Seleccione Departamento</option>
                              @foreach ($departments as $department)
                              <option value="{{ $department->id }}">{{ $department->name }}</option>
                              @endforeach
                            </select>
                          </div> --}}
                          <div class="col">
                            <button type="submit" class="btn btn-block btn-warning">Buscar</button>
                          </div>
                        </form>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        {{-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> --}}
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="row">
                  <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Let&apos;s talk product</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
                  </div>
                </div> --}}
                <div class="features">
                  <div class="row">
                    @foreach ($adverts as $advert)
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                      <div class="card" style="height: 350px;">
                        {{-- <img class="card-img-top" src="{{ $advert->images()->first()->image }}" alt="Card image cap"> --}}
                        <a href="{{ route('pages.single', $advert->slug) }}">
                        @php
                          $featuredImage = $advert->images()->where('featured', true)->first();

                          if(!$featuredImage)
                            $featuredImage = $advert->images()->first();
                        @endphp
                        @if ($featuredImage)
                          @if (substr($featuredImage->image, 0, 4) == "http")
                            <img class="card-img-top" src="{{ $featuredImage->image }}" alt="Card image cap">
                          @else
                            <img class="card-img-top" src="{{ url('/storage/adverts/' . $advert->slug . '/' . $featuredImage->image) }}" alt="Card image cap">
                          @endif
                        @else
                            {{-- No hay imagen --}}
                            <img class="card-img-top" src="{{ url('/storage/default.jpg') }}" alt="Card image cap">
                        @endif
                        <div class="card-body">
                          <h4 class="card-title">{{ $advert->title }}</h4>
                          <p class="card-text">{{ $advert->extract }}</p>
                          {{-- <p class="card-text">{{ $advert->category->name }}</p> --}}
                        </a>
                        </div>
                      </div>
                    </div>
                    @endforeach                    
                    {{-- Fila de Caracteristicas --}}
                  </div>
                </div>
              </div>

              {{-- Equipo --}}
              {{-- <div class="section text-center">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="team-player">
                        <div class="card card-plain">
                          <div class="col-md-6 ml-auto mr-auto">
                            <img src="../assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                          </div>
                          <h4 class="card-title">Gigi Hadid
                            <br>
                            <small class="card-description text-muted">Model</small>
                          </h4>
                          <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                              <a href="#">links</a> for people to be able to follow them outside the site.</p>
                          </div>
                          <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="team-player">
                        <div class="card card-plain">
                          <div class="col-md-6 ml-auto mr-auto">
                            <img src="../assets/img/faces/christian.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                          </div>
                          <h4 class="card-title">Christian Louboutin
                            <br>
                            <small class="card-description text-muted">Designer</small>
                          </h4>
                          <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                              <a href="#">links</a> for people to be able to follow them outside the site.</p>
                          </div>
                          <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="team-player">
                        <div class="card card-plain">
                          <div class="col-md-6 ml-auto mr-auto">
                            <img src="../assets/img/faces/kendall.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                          </div>
                          <h4 class="card-title">Kendall Jenner
                            <br>
                            <small class="card-description text-muted">Model</small>
                          </h4>
                          <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                              <a href="#">links</a> for people to be able to follow them outside the site.</p>
                          </div>
                          <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}

              {{-- Contacto --}}
              {{-- <div class="section section-contacts">
                <div class="row">
                  <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Work with us</h2>
                    <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                    <form class="contact-form">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Your Name</label>
                            <input type="email" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Your Email</label>
                            <input type="email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                        <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-4 ml-auto mr-auto text-center">
                          <button class="btn btn-primary btn-raised">
                            Send Message
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div> --}}
              {{-- Fin de contacto --}}

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

    <!--   Core JS Files   -->
    {{-- <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-material-design.js') }}" type="text/javascript"></script> --}}
    
    <!-- Plugin for Date Time Picker and Full Calendar Plugin-->
    {{-- <script src="{{ asset('js/plugins/moment.min.js')}}"></script> --}}

    <!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    {{-- <script src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}"></script> --}}

    <!-- Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    {{-- <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}"></script> --}}

    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    {{-- <script src="{{ asset('js/plugins/jasny-bootstrap.min.js') }}"></script> --}}

    <!-- Plugin for Small Gallery in Product Page -->
    {{-- <script src="{{ asset('js/plugins/jquery.flexisel.js') }}"></script> --}}

    <!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    {{-- <script src="{{ asset('js/plugins/bootstrap-datetimepicker.min.js') }}"></script> --}}

    <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    {{-- <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script> --}}

    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    {{-- <script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script> --}}

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    {{-- <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script> --}}

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    {{-- <script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script> --}}

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    {{-- <script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script> --}}

</html>
