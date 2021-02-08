  <style>

    .call-to-action{
      background-image: url('<?php echo BASE_URL; ?>/assets/images/call-to-action.jpg');
    }

    .hero-area .owl-controls .owl-nav .owl-prev{
      padding-top: 8px;
    }

    .hero-area .owl-controls .owl-nav .owl-next{
      padding-top: 8px;
    }

    .hero-area{
      height: 100vh;
    }

    .hero-area .single-slider{
      height: 100vh;
    }

    .hero-area .slider-text{
      height: 100vh;
    }

    .hero-area .image-gallery{
      top: 300px;
    }


		
		.areaslide{
			height: auto;
		}

		.carousel-item{
			height: auto;
			border: 2px solid #fff;
			max-width: 1150px;
			width: 100%;
			margin-top: 100px;
		}

		.carousel-item img{
			width: 100%;
		}

		.carousel-control-next-icon{
			margin-top: 100px;
		}

		.carousel-control-prev-icon{
			margin-top: 100px;
		}

		.services .single-service{
			/* min-height: 400px !important; */
		}

		@media all and (min-width: 480px){
			.services .single-service{
				/* min-height: 350px !important; */
			}
		}

		@media all and (min-width: 1024px){
			.areaslide{
				height: 400px;
			}

			.carousel-item{
				height: 400px;
				border: 2px solid #fff;
				max-width: 1150px;
				width: 100%;
				margin-top: 0px;
			}

			.carousel-item img{
				width: 100%;
			}

			.carousel-control-next-icon{
				margin-top: 0px;
			}

			.carousel-control-prev-icon{
				margin-top: 0px;
			}
		}

		@media all and (min-width: 1280px){
      .hero-area .image-gallery{
        top: 200px;
      }
    }

    @media all and (min-width: 1366px){
      .hero-area .image-gallery{
        top: 150px;
      }
    }

    @media all and (min-width: 1680px){
      .hero-area .image-gallery{
        top: 300px;
      }
		}

  </style>

  <script>
    $(document).ready(function(){
      $('.m1').addClass('active2');
    });
  </script>
	
	<center>
		<div id="demo" class="carousel slide areaslide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo BASE_URL; ?>/assets/images/slider1.jpg" alt="Los Angeles">
					</div>
					<div class="carousel-item">
						<img src="<?php echo BASE_URL; ?>/assets/images/slider1.jpg" alt="Chicago">
					</div>
					<div class="carousel-item">
						<img src="<?php echo BASE_URL; ?>/assets/images/slider1.jpg" alt="New York">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

		</div>
	</center>
		
		<!-- About Us -->
		<section class="about-us section" style="background:#ff6f12;" >
			<div class="container" style="background:#fff;padding:50px;" >
				<div class="row">
					<div class="col-12">
						<div class="section-title wow fadeInUp">
							<!-- <span class="title-bg">DDTIZA-ID</span> -->
							<h1>Sobre Nós</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.6s">
						<!-- Video -->
						<div class="about-video">
							<div class="single-video overlay">
								<img src="<?php echo BASE_URL; ?>/assets/images/about.jpg" alt="#">
							</div>
						</div>
						<!--/ End Video -->
					</div>
					<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.8s">
						<!-- About Content -->
						<div class="about-content">
							<h2>Somos uma empresa profissional em Desentupir!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.  You think water moves fast? You should see ice.</p>
							<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a weeked do incididunt magna Lorem</p>
              <div class="button">
                <a href="<?php echo BASE_URL; ?>/about" class="btn" style="background:#ff6f12;color:white;border:1px solid #ff6f12;" >Saiba Mais</a>
              </div>
						</div>
						<!--/ End About Content -->
					</div>
        </div>      
			</div>
		</section>
		<!--/ End About Us -->
		
		<!-- Services -->
		<section id="services" class="services section" style="background:#ff6f12;" >
			<div class="container" style="background:#fff;padding:50px;" >
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<!-- <span class="title-bg">SERVIÇOS</span> -->
							<h1>O que nós fornecemos</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="service-slider">
							<!-- Single Service -->
							<div class="single-service">
               <i  class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 1</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
								<i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 2</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 3</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 4</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 5</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 6</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 7</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 8</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 9</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->	
							<!-- Single Service -->
							<div class="single-service">
              <i class="fa fa-lightbulb-o"></i>
								<h2><a href="<?php echo BASE_URL; ?>/services">Serviço 10</a></h2>
								<p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
								
							</div>
							<!-- End Single Service -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->
		
		<!-- Fun Facts -->
		<section id="fun-facts" class="fun-facts section" style="background:#ff6f12;"  >
			<div class="container" style="background:#fff;padding:10px;" >	
				<div class="row">
					<div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
						<div class="text-content">
							<div class="section-title">
								<h1><span>METAS</span>Conquistas</h1>
								<p>Caro cliente, é com grande alegria que agradecemos por depositar sua confiança em nosso trabalho e profissionalismo.</p>
								<a href="<?php echo BASE_URL; ?>/orcamento" class="btn primary">ORÇAMENTO</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-12">
						<div class="row">	
							<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
								<!-- Single Fact -->
								<div class="single-fact">
									<div class="icon"><i class="fa fa-users"></i></div>
									<div class="counter">
										<p><span class="count">35</span></p>
										<h4>Clientes Satisfeitos</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
							<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
								<!-- Single Fact -->
								<div class="single-fact">
									<div class="icon"><i class="fa fa-bullseye"></i></div>
									<div class="counter">
										<p><span class="count">88</span></p>
										<h4>Tipos de Serviços</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
							<div class="col-lg-12 col-md-6 col-12 wow fadeIn" data-wow-delay="1.2s">
								<!-- Single Fact -->
								<div class="single-fact" style="display:flex;justify-content:center;" >
									<div class="icon"><i class="fa fa-trophy"></i></div>
									<div class="counter">
										<p><span class="count">32</span></p>
										<h4>Anos no mercado</h4>
									</div>
								</div>
								<!--/ End Single Fact -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Fun Facts -->
	
		<!-- Portfolio -->
		<section id="portfolio" class="portfolio section" style="background:#ff6f12;" >
			<div class="container" style="background:#fff;padding:50px;padding: 50px;" >
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="">
							<!-- <span class="title-bg">Galeria</span> -->
							<h1 style="line-height: 0;color:#ff6f12;" >Algumas Fotos</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- portfolio Nav -->
						<div class="portfolio-nav">
							<ul class="tr-list list-inline" id="portfolio-menu">
							</ul>  		
						</div>
						<!--/ End portfolio Nav -->
					</div>
				</div>
				<div class="portfolio-inner">
					<div class="row">	
						<div class="col-12">	
							<div id="portfolio-item">
								<!-- Single portfolio -->
								<div class="cbp-item website animation printing">
									<div class="portfolio-single">
										<div class="portfolio-head">
										<a href="<?php echo BASE_URL; ?>/assets/images/foto1.jpg" class="example-image-link" data-lightbox="example-set" >	<img src="<?php echo BASE_URL; ?>/assets/images/foto1.jpg" alt="#" class="example-image" /></a>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item website package development">
									<div class="portfolio-single">
										<div class="portfolio-head">
										<a href="<?php echo BASE_URL; ?>/assets/images/foto2.jpg" class="example-image-link" data-lightbox="example-set" >	<img src="<?php echo BASE_URL; ?>/assets/images/foto2.jpg" alt="#" class="example-image" /></a>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item website animation">
									<div class="portfolio-single">
										<div class="portfolio-head">
										<a href="<?php echo BASE_URL; ?>/assets/images/foto3.jpg" class="example-image-link" data-lightbox="example-set" >	<img src="<?php echo BASE_URL; ?>/assets/images/foto3.jpg" alt="#" class="example-image" /></a>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item development printing">
									<div class="portfolio-single">
										<div class="portfolio-head">
										<a href="<?php echo BASE_URL; ?>/assets/images/foto4.jpg" class="example-image-link" data-lightbox="example-set" >	<img src="<?php echo BASE_URL; ?>/assets/images/foto1.jpg" alt="#" class="example-image" /></a>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item development package">
									<div class="portfolio-single">
										<div class="portfolio-head">
										<a href="<?php echo BASE_URL; ?>/assets/images/foto5.jpg" class="example-image-link" data-lightbox="example-set" >	<img src="<?php echo BASE_URL; ?>/assets/images/foto2.jpg" alt="#" class="example-image" /></a>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<!-- Single portfolio -->
								<div class="cbp-item website animation printing">
									<div class="portfolio-single">
										<div class="portfolio-head">
										<a href="<?php echo BASE_URL; ?>/assets/images/foto6.jpg" class="example-image-link" data-lightbox="example-set" >	<img src="<?php echo BASE_URL; ?>/assets/images/foto3.jpg" alt="#" class="example-image" /></a>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
							</div>
						</div>
						<div class="col-12">
							<div class="button">
								<a class="btn primary" href="<?php echo BASE_URL; ?>/photos">VER LISTA COMPLETA</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Call To Action -->
		<section class="call-to-action section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12 wow fadeInUp">
						<div class="call-to-main">
							<h2>Nossa Missão <br> <span style="font-size:12px;" > DDTIZA-ID </span> </h2> <br>
							<p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim feugiat, facilisis arcu vehicula, consequat sem. Cras et vulputate nisi, ac dignissim mi. Etiam laoreet</p>
							<a href="<?php echo BASE_URL; ?>/contact" class="btn">ORÇAMENTO</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call To Action -->
		
		<!-- Blogs Area -->
		<section class="blogs-main section" style="background:#ff6f12;" >
			<div class="container" style="background:#fff;padding:50px;" >
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<!-- <span class="title-bg">News</span> -->
							<h1>Depoimentos</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row blog-slider">
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="<?php echo BASE_URL; ?>/assets/images/t1.jpg" alt="#" >
									</div>
									<div class="blog-bottom">
										<div class="blog-inner">
											<h4><a href="javascript:void(0);">Nome da Pessoa</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt nobis cumque voluptas ipsam cum ratione, tenetur, fuga laborum sit saepe, quisquam aut nihil mollitia eveniet quos culpa. Quos, voluptatem.</p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="<?php echo BASE_URL; ?>/assets/images/t2.jpg" alt="#">
									</div>
									<div class="blog-bottom">
                    <div class="blog-inner">
											<h4><a href="javascript:void(0);">Nome da Pessoa</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt nobis cumque voluptas ipsam cum ratione, tenetur, fuga laborum sit saepe, quisquam aut nihil mollitia eveniet quos culpa. Quos, voluptatem.</p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="<?php echo BASE_URL; ?>/assets/images/t3.jpg" alt="#">
									</div>
									<div class="blog-bottom">
                    <div class="blog-inner">
											<h4><a href="javascript:void(0);">Nome da Pessoa</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt nobis cumque voluptas ipsam cum ratione, tenetur, fuga laborum sit saepe, quisquam aut nihil mollitia eveniet quos culpa. Quos, voluptatem.</p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="<?php echo BASE_URL; ?>/assets/images/t4.jpg" alt="#">
									</div>
									<div class="blog-bottom">
									  <div class="blog-inner">
											<h4><a href="javascript:void(0);">Nome da Pessoa</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt nobis cumque voluptas ipsam cum ratione, tenetur, fuga laborum sit saepe, quisquam aut nihil mollitia eveniet quos culpa. Quos, voluptatem.</p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="<?php echo BASE_URL; ?>/assets/images/t3.jpg" alt="#">
									</div>
									<div class="blog-bottom">
                    <div class="blog-inner">
											<h4><a href="javascript:void(0);">Nome da Pessoa</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt nobis cumque voluptas ipsam cum ratione, tenetur, fuga laborum sit saepe, quisquam aut nihil mollitia eveniet quos culpa. Quos, voluptatem.</p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
							<div class="col-lg-4 col-12">
								<!-- Single Blog -->
								<div class="single-blog">
									<div class="blog-head">
										<img src="<?php echo BASE_URL; ?>/assets/images/t1.jpg" alt="#">
									</div>
									<div class="blog-bottom">
                    <div class="blog-inner">
											<h4><a href="javascript:void(0);">Nome da Pessoa</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt nobis cumque voluptas ipsam cum ratione, tenetur, fuga laborum sit saepe, quisquam aut nihil mollitia eveniet quos culpa. Quos, voluptatem.</p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blogs Area -->
		