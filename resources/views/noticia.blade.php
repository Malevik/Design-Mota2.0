@extends('layouts.base')

@section('main')

<!-- page-header -->
<section id="page-header" class="parallax">
    <div class="overlay"></div>
     <div class="container">
         <h1>Noticias</h1>
     </div>
 </section>
 <!-- /page-header -->
 
 <!--Start blog -->
 <section class="section">
     <div class="container">
         <div class="row">
             <!-- Blog Post -->
             <div class="col-md-8 col-sm-8">
                 <div class="post-content">	
                     <!-- Post Image -->
                     <div class="post-img">
                         <img src="images/blog-img1.jpg" alt="">
                     </div>
                     <!-- /Post Image-->
                     
                     <!-- Post Meta-->
                        <ul class="post-meta">
                         <li> <i class="fa fa-user"></i> Admin </li>
                         <li> <i class="fa fa-calendar"></i> 20 Oct, 2017  </li>
                         <li> <i class="fa fa-comments"></i> 12  </li>
                         </ul>
                     <!-- /Post Meta-->
                     
                     <!-- Post Description -->
                     <div class="post-description">							
                         <h3>Lorem ipsum dolor sit amet  consectetur adipisicing elit  Inventore  dolorum  fugiat  eligendi magni quibusdam iure cupiditate</h3>
                         <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi. Vivamus pretium, ante nec facilisis convallis, lorem lectus porta mi, ut pharetra purus augue a est. Integer pharetra tempus mauris, eu rutrum ante gravida ac. Duis aliquet elementum enim, sit amet congue neque faucibus id. Nunc sit amet massa aliquam, auctor libero eget, euismod augue. 
                         </p>
                         
                         <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde voluptatibus quos expedita autem qui vitae corrupti exercitationem facilis nihil atquea</blockquote>
                         
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde voluptatibus quos expedita autem qui vitae corrupti exercitationem facilis nihil atque!</p>
                         
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde voluptatibus quos expedita autem qui vitae corrupti exercitationem facilis nihil atque!</p>
                     </div>
                     <!-- /Post Description -->
                                       
                     <!-- Comment list -->
                     <div class="comment-list">
                         <h3>5 Comments</h3>
                                                 
                         <ol>
                             <li class="comment">
                                 <div class="single_comment first-comment">
                                     <div class="comment-avatar">
                                         <div class="avatar">
                                             <img src="images/avatar1.jpg" alt="">
                                         </div>
                                     </div>
                                     <div class="comment-content">
                                         <div class="comment-name"><a href="#">John Doe</a>
                                          <a href="#" class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div>
                                         <div class="comment-desc">18 November, 2014 at 12:48 pm</div>                                
                                         <div class="comment-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                     
                             <li class="comment">					
                                 <div class="single_comment">
                                     <div class="comment-avatar">
                                         <div class="avatar">
                                             <img src="images/avatar2.jpg" alt="">
                                         </div>
                                     </div>
                                     <div class="comment-content">
                                         <div class="comment-name"><a href="#">John Doe</a>
                                          <a href="#" class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div>
                                         <div class="comment-desc">18 November, 2014 at 12:48 pm</div>                                
                                         <div class="comment-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                                                 
                                 <!-- comment-sub -->
                                 <ol class="comment-sub">
                                     <li class="comment">
                                         <div class="single_comment">
                                             <div class="comment-avatar">
                                                 <div class="avatar">
                                                     <img src="images/avatar3.jpg" alt="">
                                                 </div>
                                            </div>
                                             <div class="comment-content">
                                         <div class="comment-name"><a href="#">John Doe</a>
                                          <a href="#" class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div>
                                         <div class="comment-desc">18 November, 2014 at 12:48 pm</div>                                
                                         <div class="comment-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                             </p>
                                         </div>
                                     </div>
                                         </div>										
                                         <ol class="comment-sub">
                                             <li class="comment">
                                                 <div class="single_comment">
                                                     <div class="comment-avatar">
                                                         <div class="avatar">
                                                             <img src="images/avatar4.jpg" alt="">
                                                         </div>
                                                     </div>
                                                 <div class="comment-content">
                                                     <div class="comment-name"><a href="#">John Doe</a>
                                                      <a href="#" class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div>
                                                     <div class="comment-desc">18 November, 2014 at 12:48 pm</div>                                
                                                     <div class="comment-text">
                                                         <p>
                                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                                         </p>
                                                     </div>
                                                 </div>
                                                 </div>
                                             </li>
                                         </ol>
                                     </li>
                                 </ol>
                                 <!--End comment-sub-->
                             </li>

                             <li class="comment">
                                 <div class="single_comment">
                                     <div class="comment-avatar">
                                         <div class="avatar">
                                             <img src="images/avatar2.jpg" alt="">
                                         </div>
                                     </div>
                                     <div class="comment-content">
                                         <div class="comment-name"><a href="#">John Doe</a>
                                          <a href="#" class="comment-reply"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div>
                                         <div class="comment-desc">18 November, 2014 at 12:48 pm</div>                                
                                         <div class="comment-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ol>
                     </div>
                     <!-- /comment List -->
                                         
                     <!-- Comment Section -->
                     <div class="comments-section">								
                         <h3>Deixe um Comentário</h3>
                         <div class="comment-form">
                             <form method="post">
                                 <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Nome">
                                         </div>
                                     </div>
                                     
                                     <div class="col-md-6">
                                        <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email" >
                                           </div>
                                     </div>
                                     
                                     <div class="col-md-6">
                                        <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Assunto" >
                                           </div>
                                     </div>
                                     
                                     <div class="col-md-6">
                                        <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Empresa" >
                                           </div>
                                     </div>
                                     
                                     <div class="col-md-12">
                                         <div class="form-group">
                                            <textarea class="form-control" placeholder="Seu Comentário" rows="7"></textarea>
                                          </div>
                                     </div>
                                     
                                     <div class="col-md-12 text-right">
                                         <button type="submit" class="btn btn-primary">Enviar Comentário</button>
                                     </div>
                                 </div>
                             </form>
                         </div>						
                     </div>
                     <!-- /Comment Section -->											
                 </div>
             </div>	
             <!-- /Blog Post -->

             <!-- Right Sidebar -->					
            <div class="col-md-4 col-sm-4">	
             
                <div class="widget widget-sidebar">
                     <div class="search-box">
                         <form>
                            <div class="form-group">
                             <input type="search" class="form-control"  placeholder="Procurar">
                             <i class="fa fa-search"></i>
                             </div>
                         </form>
                     </div>
                 </div>
                 
           <!--Start popular Post -->
                 <div class="widget-main">
                         <h3>Postagens Populares</h3>
                         <div class="sidebar-widget clearfix">	
                             <a href="#"><img src="images/blog-img1.jpg" alt=""></a>
                             <p class="sidebar-widget-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </a></p>
                             <p class="date">19 Oct, 2017</p>
                         </div>
                         <div class="sidebar-widget clearfix">	
                             <a href="#"><img src="images/blog-img2.jpg" alt=""></a>
                             <p class="sidebar-widget-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
                             <p class="date">19 Oct, 2017</p>
                         </div>	
                         <div class="sidebar-widget clearfix">	
                             <a href="#"><img src="images/blog-img3.jpg" alt=""></a>
                             <p class="sidebar-widget-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
                             <p class="date">19 Oct, 2017</p>
                         </div>	
                 </div>	
                 <!-- / popular Post -->
                 
                 <!--start post categories-->
                 <div class="widget-main">
                      <h3>Categorias</h3>
                     <div  class="post-categories">
                         <ul>
                         <li><a href="#">Photography</a></li>
                         <li><a href="#">WordPress</a></li>
                         <li><a href="#">Web Design</a></li>
                         <li><a href="#">Video</a></li>
                         <li><a href="#">Photography</a></li>
                        </ul>
                      </div>
                 </div>
                 <!--/ post categories-->
             
                 <!-- Text -->
                 <div class="widget-main">	
                     <h3>Text Widget </h3>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                     </p>
                 </div>
                 <!-- /Text -->
                 

                 <!-- Tags -->
                 <div class="widget-main">
                    <h3>Tags</h3>
                     <div class="tags">
                         <a href="#">Web Design</a>
                         <a href="#">Graphic Design</a>
                         <a href="#">PHP</a>
                          <a href="#">Jquery</a>
                         <a href="#">Wordpress</a>
                         <a href="#">Animation</a>
                         <a href="#">Audio</a>
                         <a href="#">Photo Gallery</a>						
                     </div>
                 </div>
                 <!-- /Tags -->
             </div>
             <!-- /right Sidebar -->
         </div> <!-- /row -->			
     </div>		
 </section>
 <!-- /blog -->

@endsection