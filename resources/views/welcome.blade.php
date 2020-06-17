@extends('layouts.base')

@section('main')

    <div id="carouselW" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselW" data-slide-to="0" class="active"></li>
            <li data-target="#carouselW" data-slide-to="1"></li>
            <li data-target="#carouselW" data-slide-to="2"></li>
        </ol>
 
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('frontbase/images/banner.jpg')}}" >
                <div class="carousel-caption">
                    <h2 class="uppercase">Quem Somos</h2>
                    <p class="lead">O escritório Mota Advocacia foi fundado em 2015, pelo Sócio Fundador Ademar Ferreira Mota, para ter o compromisso com a inovação e atualizaçãojurídica constante, para desenvolver soluções jurídicas sob medida para você e sua empresa de forma objetiva e segura. O escritório está posicionado no interior do Estado de São Paulo, mas possui capacidade para atuação regional e consegue sempre estar presente e trabalhar de forma interativa e com responsabilidade ética e profissional junto aos seus clientes.</p>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('frontbase/images/banner.jpg')}}" >
                <div class="carousel-caption">
                    <h2 class="uppercase">O Compromisso</h2>
                    <p class="lead">Nós temos o compromisso com a inovação e atualização jurídica constante, buscando manter o escritório e sua equipe aptos a desenvolver soluções jurídicas sob medida para você e sua empresa de forma objetiva e segura.</p>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('frontbase/images/banner.jpg')}}" >
                <div class="carousel-caption">
                    <h2 class="uppercase">Especialidades</h2>
                    <p class="lead">Operações de Planejamento e Contencioso Tributário, Reestruturações Societárias, Contencioso Trabalhista, Cível, Ambiental e Contratos de venda e Compra de imóveis e Empresas.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carouselW" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior    </span>
        </a>
        <a class="right carousel-control" href="#carouselW" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Avançar</span>
        </a>

        </div>
        <!--Start About Section
        <section id="feature" class="section featue-section">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-center col-md-12">
                        <h2>Quem Somos</h2>
                        <p class="lead">O escritório Mota Advocacia foi fundado em 2015, pelo Sócio Fundador Ademar Ferreira Mota, para ter o compromisso com a inovação e atualizaçãojurídica constante, para desenvolver soluções jurídicas sob medida para você e sua empresa de forma objetiva e segura. O escritório está posicionado no interior do Estado de São Paulo, mas possui capacidade para atuação regional e consegue sempre estar presente e trabalhar de forma interativa e com responsabilidade ética e profissional junto aos seus clientes.</p>
                    </div>
        
                    Features item
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="icon"> <i class="fas fa-building"></i>  </div>
                            <div class="feature-info">
                                <h3>O Começo</h3>
                                <p>O Escritório foi fundado em 2015 e está fundamentado na experiência de mais de dezessete anos de atuação do Sócio Fundador Ademar Ferreira Mota, como advogado de empresas. </p>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="icon"> <i class="fas fa-handshake"></i>  </div>
                            <div class="feature-info">
                                <h3>O Compromisso</h3>
                                <p> Nós temos o compromisso com a inovação e atualização jurídica constante, buscando manter o escritório e sua equipe aptos a desenvolver soluções jurídicas sob medida para você e sua empresa de forma objetiva e segura.</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="icon"> <i class="fas fa-user-tie"></i>  </div>
                            <div class="feature-info">
                                <h3>Especialidades</h3>
                                <p>Operações de Planejamento e Contencioso Tributário, Reestruturações Societárias, Contencioso Trabalhista, Cível, Ambiental e Contratos de venda e Compra de imóveis e Empresas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        End About Section-->

        <section class="mission-section section-half-img ">
          
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 clearfix">
                        <div class="side-half-inner">
                            </div>
                  </div>
                </div>
            </div>
        </section>
        <!--End Section-->
    
        <!--Start Section-->
        <section class="mission-section section-half-img ">
            <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6 side-img-inner">
                <div class="side-background side-img">
                </div>
            </div>
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 clearfix">
                        <div class="side-half-inner">
                            <h3 class="m-b-15">Propósito</h3>
                            <p>Nosso propósito é sempre agregar valor aos negócios de nossos clientes sendo instrumento de realização dos objetivos. A Mota Advocacia transforma direitos em resultados.</p>
                        </div>
                  </div>
                </div>
            </div>
        </section>
        <!--End Section-->
     
        <!--Start Team
        <section id="team" class="section team-section">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-center">
                        <h2>Advogados</h2>
                    </div>
                    
                    <div class="team-slide">
                        <div class="team-members">
                            <div class="team-photo">
                                <img src="{{asset('frontbase/images/member-1.png')}}"  alt=""/>
                            </div>
                            <div class="team-info">
                                <h3>Ademar F. Mota</h3>
                                <h6>Sócio Fundador</h6>
                                <ul class="socials">
                                    <li> <a href="#"> <i class="fa fa-twitter"></i>  </a>  </li>
                                    <li> <a href="#"> <i class="fa fa-facebook"></i>  </a>  </li>
                                    <li> <a href="#"> <i class="fa fa-linkedin"></i>  </a>  </li>
                                </ul>
                            </div>
                        </div>

                        team-members
                        <div class="team-members">
                            <div class="team-photo">
                                <img src="{{asset('frontbase/images/member-2.png')}}"  alt=""/>
                            </div>
                            
                            <div class="team-info">
                                <h3>João Victor R. Braguin</h3>
                                <h6>Advogado</h6>
                                <ul class="socials">
                                    <li> <a href="#"> <i class="fa fa-twitter"></i>  </a>  </li>
                                    <li> <a href="#"> <i class="fa fa-facebook"></i>  </a>  </li>
                                    <li> <a href="#"> <i class="fa fa-linkedin"></i>  </a>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        End Team-->
        
        <!-- Start Facts-->
        <section id="facts" class="section  parallax">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                </div> <!-- /.row -->
           </div> <!-- /.container -->
        </section>
        <!--End Facts-->
    
        <!--Start Services Section
        <section id="services" class="section services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 text-center">
                        <div class="section-heading">
                            <h2>ATUAÇÃO</h2>
                        </div>
                    </div>
    
                    <div class="col-md-4 col-sm-6 col-lg-6">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-hand-holding-usd"></i>  </div>
                            <div class="services-info">
                                <h3>Direito Tributário</h3>
                                <p>A Mota Advocacia agregará valor ao seu negócio elaborando Planejamento Tributário preventivo com o objetivo de minimizar legalmente os impactos tributários sobre as operações da empresa ou pessoa física.  </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-lg-6">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-building"></i>  </div>
                            <div class="services-info">
                                <h3>Direito Empresarial</h3>
                                <p>No Direito Societário a Mota Advocacia está preparada assessorar sua empresa, entre outras coisas, na constituição, alteração ou encerramento de empresas.</p>
                            </div>
                        </div> 
                    </div>                        
                    
                    <div class="col-md-4 col-sm-6 col-lg-6">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-tree"></i>  </div>
                            <div class="services-info">
                                <h3>Direito Ambiental</h3>
                                <p>Oferecemos aos nossos clientes uma atuação jurídica forte na área ambiental agrega valor ao negócio melhorando a marca e a imagem da empresa perante o mercado. </p>
                            </div>
                        </div>
                    </div> /.col-md-3
                    
                    <div class="col-md-4 col-sm-6 col-lg-6 ">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-users"></i>  </div>
                            <div class="services-info">
                                <h3>Direito de Família e Sucessões</h3>
                                <p>A experiência da Mota Advocacia oferece aos clientes segurança nos planejamentos patrimoniais, com o objetivo de simplificar as sucessões, mitigando ou mesmo evitando eventuais disputas entre herdeiros, permitindo ao patriarca e a matriarca orientar esta fase do destino patrimonial.</p>
                            </div>
                        </div> 
                    </div> /.col-md-3
                    
                    <div class="col-md-4 col-sm-6 col-lg-6">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-balance-scale"></i>  </div>
                            <div class="services-info">
                                <h3>Assessoria Juridica Permanente</h3>
                                <p>As empresas ou pessoas físicas podem centralizar o seu departamento jurídico na Mota Advocacia que está apta a assessorar permanentemente pessoas físicas e jurídicas que necessitam de objetividade, clareza e segurança para tomarem decisões nas suas relações jurídicas rotineiras.</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-4 col-sm-6 col-lg-6">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-gavel"></i>  </div>
                            <div class="services-info">
                                <h3>Direito Civil e Contratual</h3>
                                <p>A equipe da Mota Advocacia está apta a prestar os serviços de propositura e acompanhamento dos Processos Cíveis em Geral em todas instâncias judiciais e administrativas</p>
                            </div>
                        </div>
                    </div> /.col-md-3

                    <div class="col-md-4 col-sm-6 col-lg-6">
                        <div class="services-box">
                            <div class="icon"> <i class="fas fa-briefcase"></i>  </div>
                                <div class="services-info">
                                    <h3>Direito do Trabalho</h3>
                                    <p>A Mota Advocacia agrega valor aos clientes com um atendimento sob medida para gestão do contencioso jurídico trabalhista de sua empresa, fazendo as defesas e acompanhando os processos</p>
                                </div>
                            </div>
                        </div> /.col-md-3
                    </div>
                </div>
            <div>
        </section> End Services Section-->
    
        <!-- Start CTA
        <section class="cta parallax">
            <div class="overlay"></div>
            <div class="container"></div> 
        </section>
   -->
        <!--Start Blog Section-->
        <section id="blog" class="section blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-md-offset-2 col-sm-offset-0 text-center">
                        <div class="section-heading">
                            <h2>ÚLTIMAS NOTÍCIAS</h2>
                            <ul class="nav nav-tabs nav-justified flex-column flex-md-row" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="nav-artigo-tab" data-toggle="tab" href="#artigo" role="tab" aria-controls="artigo" aria-selected="true">Artigos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="nav-noticia-tab" data-toggle="tab" href="#noticia" role="tab" aria-controls="noticia" aria-selected="false">Notícias</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="nav-blog1-tab" data-toggle="tab" href="#blog1" role="tab" aria-controls="blog1" aria-selected="false">Blog</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="nav-book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book" aria-selected="false">E-book</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="nav-video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Videos</a>
                                  </li>
                                  
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane active" id="artigo" role="tabpanel" aria-labelledby="artigo-tab">
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img1.jpg')}}" alt="" />
                                            </div>
                                            
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img2.jpg')}}" alt="" />
                                            </div>
                                            
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                            </div>
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                  </div>

                                  <div class="tab-pane fade" id="noticia" role="tabpanel" aria-labelledby="noticia-tab">

                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img1.jpg')}}" alt="" />
                                            </div>
                                            
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img2.jpg')}}" alt="" />
                                            </div>
                                            
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                            </div>
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                  </div>

                                  <div class="tab-pane fade" id="blog1" role="tabpanel" aria-labelledby="blog1-tab">

                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img1.jpg')}}" alt="" />
                                            </div>
                                            
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img2.jpg')}}" alt="" />
                                            </div>
                                            
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                            </div>
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                  </div>
                                  <div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="book-tab">
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                            </div>
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                            </div>
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <div class="blog-media">
                                                <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                            </div>
                                            <div class="blog-info">
                                                <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                <ul class="meta">
                                                    <li> <i class="fa fa-user"></i> Admin </li>
                                                    <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                    <li> <i class="fa fa-comments"></i> 12  </li>
                                                </ul>
                                                <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div> <!--/.col-md-4-->
                                 </div>
                                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab"> 
                                        <div class="col-md-4">
                                            <div class="blog-item">
                                                <div class="blog-media">
                                                    <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                                </div>
                                                <div class="blog-info">
                                                    <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                    <ul class="meta">
                                                        <li> <i class="fa fa-user"></i> Admin </li>
                                                        <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                        <li> <i class="fa fa-comments"></i> 12  </li>
                                                    </ul>
                                                    <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                    <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                                </div>
                                            </div>
                                        </div> <!--/.col-md-4-->
                                        <div class="col-md-4">
                                            <div class="blog-item">
                                                <div class="blog-media">
                                                    <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                                </div>
                                                <div class="blog-info">
                                                    <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                    <ul class="meta">
                                                        <li> <i class="fa fa-user"></i> Admin </li>
                                                        <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                        <li> <i class="fa fa-comments"></i> 12  </li>
                                                    </ul>
                                                    <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                    <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                                </div>
                                            </div>
                                        </div> <!--/.col-md-4-->
                                        <div class="col-md-4">
                                            <div class="blog-item">
                                                <div class="blog-media">
                                                    <img src="{{ asset('frontbase/images/blog-img3.jpg')}}" alt="" />
                                                </div>
                                                <div class="blog-info">
                                                    <h3><a href="{{ url('http://localhost/mota/noticia') }}">The generated Lorem Ipsum text</a></h3>
                                                    <ul class="meta">
                                                        <li> <i class="fa fa-user"></i> Admin </li>
                                                        <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                                                        <li> <i class="fa fa-comments"></i> 12  </li>
                                                    </ul>
                                                    <p>There are many variations passages passages of Lorem Ipsum available  but the passages have suffered alteration passages some form  by injected humour or randomised words which hidden look even slightly believable.</p>
                                                    <a href="{{ url('http://localhost/mota/noticia') }}" class="btn btn-primary border">Leia Mais</a>
                                                </div>
                                            </div>
                                        </div> <!--/.col-md-4-->
                                    </div>
                                </div>
                               <!-- <li class="active"><a href="#Artigo">Artigos</a></li>
                                <li class="active"><a href="#Noticia">Notícias</a></li>
                                <li class="active"><a href="#Blog">Blog</a></li>
                                <li class="active"><a href="#ebook">E-book</a></li>
                                <li class="tab_last"><a href="video" >Videos</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!--End Blog Section-->

        
        <!--Start Client Testimonial-->
        <section id="testimonials" class="section testimonial-section parallax">
            <div class="overlay"></div>
            <div class="container">
                <!--<div class="section-heading text-center white">  <h2>Curriculum</h2>  </div>
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <div class="testimonial-photo">
                                <img src="{{asset('frontbase/images/testimonial/member-1.png')}}" alt="" />
                            </div>
                            
                            <div class="testimonial-content">
                                <p>Mestre em Direito pela Instituição Toledo de Ensino de Bauru-SP / ITE (2016). Bacharel em Direito pelo Centro Universitário Toledo (2002). MBA em Direito Tributário pela FGV-RJ (2005). Bacharel em Ciências Contábeis no Centro Universitário Saleziano Auxíliun (2011). Pós-Graduado em Direito do Trabalho e Previdência Social (2013) pela Unitoledo Araçatuba-SP. Professor Universitário da Unitoledo em Araçatuba-SP.</p>
                                <h5>Ademar Ferreira Mota <small>Sócio Fundador</small></h5>
                            </div>
                        </div> /.testimonial-item
 
                        <div class="testimonial-item">
                            <div class="testimonial-photo">
                                <img src="{{asset('frontbase/images/testimonial/member-2.png')}}" alt="" />
                            </div>
                            <div class="testimonial-content">
                                <p>Bacharel em Direito pelo Centro Universitário Toledo. Pós graduando em Direito do Trabalho e Previdência Social pelo Centro Universitário Toledo.</p>
                                <h5>João Victor R. Braguin <small>Advogado</small></h5>
                            </div>
                        </div> /.testimonial-item-->
                    </div>
                </div>
        </section><!--End Client Testimonial-->
        
        <!--Start Contact Section-->
        <section id="contact" class="section contact-section ">
            <div class="container">
                <div class="row">
                    <div class="section-heading  text-center"> <h2>Contato</h2>  </div>
                 <!--   <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-box">
                                <div class="contact-icon"><i class="fa fa-map-o"></i>  </div>
                                <div class="contact-desc">
                                    <h5>Endereço</h5>
                                    <p>Rua João Francisco Vasques, 29 - CEP 16.250-000 - Centro - Clementina/SP</p>
                                    <p>Rua Barão do Rio Branco, 868 - CEP 16.200-001- Centro - Birigui/SP</p>
                                </div>
                            </div>
                            
                            <div class="contact-info-box">
                                <div class="contact-icon"><i class="fa fa-envelope-o "></i>  </div>
                                <div class="contact-desc">
                                    <h5>Email</h5>
                                    <p>motaadvocaciaeconsultoria@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-info-box">
                                <div class="contact-icon"><i class="fa fa-phone "></i></div>
                                <div class="contact-desc">
                                    <h5>Telefone</h5>
                                    <p> (18) 99781 6626 (vivo)</p>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form action="contact.php" method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" required  placeholder="Nome"  type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" required  placeholder="Email"  type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class=" form-group">
                                        <input class="form-control" name="subject"  placeholder="Assunto"  type="text">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message"  cols="30" rows="9" placeholder="Mensagem" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group text-right m-b-0">
                                    <input value="Enviar" name="submit" class="btn btn-primary" type="submit">
                                </div>
                            </form>
                        </div>
                    </div> <!--/.contact-form-->
                </div>
            </div>
        </section>
        <!--End Contact Section-->
@endsection
