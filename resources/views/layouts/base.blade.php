<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mota Advocacia & Consultoria</title>

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <!--Favicons -->
        <link rel="shortcut icon" href="{{ asset('frontbase/images/favicon1.png')}}">     

        <!--styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/bootstrap.min.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/font-awesome/font-awesome.css')}}" media="screen"  />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/et-line-font/et-lineicono.css')}}" media="screen"  />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/js/owl-carousel/owl.theme.default.css')}}" media="screen"  />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/js/owl-carousel/owl.carousel.css')}}" media="screen"  />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/magnific-popup.css')}}" media="screen"  />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/slick.css')}}" media="screen"  />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/slick-theme.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/style.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontbase/css/responsive.css')}}" media="screen" />
        <script src="https://kit.fontawesome.com/6d34224deb.js" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body  data-spy="scroll" data-target="#main-menu">

        <!--Start Page loader -->
        <div id="pageloader">   
            <div class="loader">
                <img src="{{ asset('frontbase/images/progress.gif')}}" alt='loader' />
            </div>
        </div>
        <!--End Page loader -->
  
        <!--Start Navigation-->
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--Start Logo -->
                        <div class="logo-nav">
                            <a href="index.php">
                                <img src="{{ asset('frontbase/images/logo23.png')}}" alt="Company logo" />
                            </a>
                        </div>
                        <!--End Logo -->
                        <div class="clear-toggle"></div>
                        <div id="main-menu" class="collapse scroll navbar-right">
                            <ul class="nav">
                                <li class="active"> <a href="{{ url('http://localhost/mota/') }}">Início</a> </li>
                                
                            <li> <a href="{{ url('http://localhost/mota/equipe') }}">Profissionais</a> </li>
                                
                                <li> <a href="{{ url('http://localhost/mota/atuacao') }}">Atuação</a> </li>
                                
                                <li> <a href="{{ url('http://localhost/mota/blog') }}">Notícias</a></li>
                                
                            </ul>
                        </div><!-- end main-menu -->
                    </div>
                </div>
            </div>
        </header>
        <!--End Navigation-->

        @yield('main')
        <!--Start Footer-->
        <footer class="bg3 p-t-75 p-b-32">
            <div class="container">
                <div class="row" >
                    <div class="col-md-12 col-lg-7 p-b-50">
               
                            <h4 class="stext-301 cl0 p-b-30">Entrar em contato</h4>
                                <p class="stext-107 cl7 size-201">
                                    <!-- Colocar isso como parametro -->
                                    <p>Rua: João Francisco Vasques, 29 - CEP 16.250-000 - Centro - Clementina/SP</p>
                                     <p>Rua: Barão do Rio Branco, 868 - CEP 16.200-001- Centro - Birigui/SP </p> 
                                      <p>Tel.: (18) 99781 6626 (vivo) </p>
                                        <p>Email: motaadvocaciaeconsultoria@gmail.com </p>
                                    </p>	
    
                        <div class="p-t-27">
                            <a href="https://www.facebook.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>
    
                            <a href="https://www.instagram.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>
    
                            <a href="https://www.youtube.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Novidades
                        </h4>
    
                        <form>
                            <div class="wrap-input1 w-full p-b-4">
                                <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                                <div class="focus-input1 trans-04"></div>
                            </div>
    
                            <div class="p-t-18">
                                <button class="btn btn-primary stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Inscreva-se
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
    
                <div class="p-t-40">
    
                    <p class="stext-107 cl6 txt-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Jean&copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Feito por <i class="fa fa-circle-o" aria-hidden="true"></i> <a href="#" target="_blank">Xcom Sistemas</a> &amp; distribuido por <a href="" target="_blank">Gustavo</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </footer>
        <!--End Footer-->
  
        <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>
         <!--Plugins-->
        <script src="{{ asset('frontbase/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('frontbase/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('frontbase/js/owl-carousel/owl.carousel.js')}}" type="text/javascript"></script>
        <script src="{{ asset('frontbase/js/jquery.parallax-1.1.3.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('frontbase/js/jquery.mixitup.js')}}" type="text/javascript" ></script>
        <script src="{{ asset('frontbase/js/jquery.magnific-popup.min.js')}}"  type="text/javascript" ></script>
        <script src="{{ asset('frontbase/js/easing.js')}}"  type="text/javascript"></script>
        <script src="{{ asset('frontbase/js/slick.js')}}" type="text/javascript"></script>
        <script src="{{ asset('frontbase/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>