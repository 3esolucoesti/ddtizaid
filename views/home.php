  <style>
  	.call-to-action {
  		background-image: url('<?= BASE_URL; ?>/painel/assets/images/<?= $info_home['missionBG'];?>');
  	}

  	.hero-area .owl-controls .owl-nav .owl-prev {
  		padding-top: 8px;
  	}

  	.hero-area .owl-controls .owl-nav .owl-next {
  		padding-top: 8px;
  	}

  	.hero-area {
  		height: 100vh;
  	}

  	.hero-area .single-slider {
  		height: 100vh;
  	}

  	.hero-area .slider-text {
  		height: 100vh;
  	}

  	.hero-area .image-gallery {
  		top: 300px;
  	}



  	.areaslide {
  		height: auto;
  	}

  	.carousel-item {
  		height: auto;
  		border: 2px solid #fff;
  		max-width: 1150px;
  		width: 100%;
  		margin-top: 100px;
  	}

  	.carousel-item img {
  		width: 100%;
  	}

  	.carousel-control-next-icon {
  		margin-top: 100px;
  	}

  	.carousel-control-prev-icon {
  		margin-top: 100px;
  	}


  	@media all and (min-width: 1024px) {
  		.areaslide {
  			height: 400px;
  		}

  		.carousel-item {
  			height: 400px;
  			border: 2px solid #fff;
  			max-width: 1150px;
  			width: 100%;
  			margin-top: 0px;
  		}

  		.carousel-item img {
  			width: 100%;
  		}

  		.carousel-control-next-icon {
  			margin-top: 0px;
  		}

  		.carousel-control-prev-icon {
  			margin-top: 0px;
  		}
  	}

  	@media all and (min-width: 1280px) {
  		.hero-area .image-gallery {
  			top: 200px;
  		}
  	}

  	@media all and (min-width: 1366px) {
  		.hero-area .image-gallery {
  			top: 150px;
  		}
  	}

  	@media all and (min-width: 1680px) {
  		.hero-area .image-gallery {
  			top: 300px;
  		}
  	}
  </style>

  <script>
  	$(document).ready(function() {
  		$('.m1').addClass('active2');
  	});
  </script>

  <!-- Slide Show -->
  <center>
  	<div id="demo" class="carousel slide areaslide" data-ride="carousel">

  		<!-- Indicators -->
  		<ul class="carousel-indicators">
  			<?php for ($i = 0; $i < count($list_slide); $i++) : ?>
  				<li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? 'active' : ''; ?>"></li>
  			<?php endfor ?>
  		</ul>

  		<!-- The slideshow -->
  		<div class="carousel-inner">
  			<?php foreach ($list_slide as $slide) : ?>
  				<div class="carousel-item <?= ($slide['id'] == $primeiro_slide['id']) ? 'active' : ''; ?>">
  					<img src="<?= BASE_URL; ?>/painel/assets/images/<?= $slide['images']; ?>" alt="Los Angeles">
  				</div>
  			<?php endforeach; ?>
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
  <section class="about-us section" style="background:#ff6f12;">
  	<div class="container" style="background:#fff;padding:50px;">
  		<!-- Titulo -->
  		<div class="row">
  			<div class="col-12">
  				<div class="section-title">
  					<h1>Sobre nós</h1>
  				</div>
  			</div>
  		</div>

  		<!-- Seção Principal -->
  		<div class="row">
  			<!-- Imagem "Sobre Nós" -->
  			<div class="col-lg-6 col-12">
  				<div class="about-video">
  					<div class="single-video overlay">
  						<img src="<?= BASE_URL; ?>/painel/assets/images/<?= $info_about['images'] ?>" alt="#">
  					</div>
  				</div>
  			</div>

  			<!-- Texto "Sobre Nós" -->
  			<div class="col-lg-6 col-12">
  				<div class="about-content">
  					<h2><?= $info_about['sobre_titulo'] ?></h2>
  					<p><?= $info_about['sobre_desc'] ?></p>
  				</div>
  			</div>
  		</div>

  	</div>
  </section>

  <!-- Services -->
  <section id="services" class="services section" style="background:#ff6f12;">
  	<div class="container" style="background:#fff;padding:50px;">
  		<div class="row">
  			<div class="col-12 wow fadeInUp">
  				<div class="section-title">
  					<h1>O que nós fornecemos</h1>
  				</div>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-12">
  				<div class="service-slider">
  					<!-- Single Service -->
  					<?php foreach ($info_services as $service) : ?>
  						<div class="single-service">
  							<i class="fa fa-lightbulb-o"></i>
  							<h2><a href="<?= BASE_URL; ?>/services"><?= $service['title'] ?></a></h2>
  							<p><?= $service['description'] ?></p>
  						</div>
  					<?php endforeach; ?>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- Fun Facts -->
  <section id="fun-facts" class="fun-facts section" style="background:#ff6f12;">
  	<div class="container" style="background:#fff;padding:10px;">
  		<div class="row">

  			<div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
  				<div class="text-content">
  					<div class="section-title">
  						<h1><span>METAS</span>Conquistas</h1>
  						<p><?= $info_home['textoconquistas'] ?></p>
  						<a href="<?= BASE_URL; ?>/contact" class="btn primary">ORÇAMENTO</a>
  					</div>
  				</div>
  			</div>

  			<div class="col-lg-7 col-12">
  				<div class="row">
						<!-- Single Fact -->
  					<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
  						<div class="single-fact">
  							<div class="icon"><i class="fa fa-users"></i></div>
  							<div class="counter">
  								<p><span class="count"><?= $info_home['ffclients'] ?></span></p>
  								<h4>Clientes Satisfeitos</h4>
  							</div>
  						</div>
  					</div>
						
						<!-- Single Fact -->
  					<div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
  						<div class="single-fact">
  							<div class="icon"><i class="fa fa-bullseye"></i></div>
  							<div class="counter">
  								<p><span class="count"><?= $info_home['ffservices'] ?></span></p>
  								<h4>Tipos de Serviços</h4>
  							</div>
  						</div>
  					</div>
						
						<!-- Single Fact -->
  					<div class="col-lg-12 col-md-6 col-12 wow fadeIn" data-wow-delay="1.2s">
  						<div class="single-fact" style="display:flex;justify-content:center;">
  							<div class="icon"><i class="fa fa-trophy"></i></div>
  							<div class="counter">
  								<p><span class="count"><?= $info_home['ffmarket'] ?></span></p>
  								<h4>Anos no mercado</h4>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="portfolio section" style="background:#ff6f12;">
  	<div class="container" style="background:#fff;padding:50px;padding: 50px;">
			<!-- Title -->
  		<div class="row">
  			<div class="col-12 wow fadeInUp">
  				<div class="">
  					<!-- <span class="title-bg">Galeria</span> -->
  					<h1 style="line-height: 0;color:#ff6f12;">Algumas Fotos</h1>
  				</div>
  			</div>
  		</div>

			<!-- portfolio Nav -->
  		<div class="row">
  			<div class="col-12">
  				<div class="portfolio-nav">
  					<ul class="tr-list list-inline" id="portfolio-menu">
  					</ul>
  				</div>
  			</div>
  		</div>
			
  		<!-- Content -->
			<div class="portfolio-inner">
  			<div class="row">
  				<div class="col-12">
  					<div id="portfolio-item">
  						<!-- Single portfolio -->
  						<?php foreach ($list_photos as $photos) : ?>
  							<div class="cbp-item website animation printing">
  								<div class="portfolio-single">
  									<div class="portfolio-head">
  										<a href="<?= BASE_URL; ?>/painel/assets/images/<?= $photos['image']; ?>" class="example-image-link" data-lightbox="example-set">
  											<img src="<?= BASE_URL; ?>/painel/assets/images/<?= $photos['image']; ?>" alt="#" class="example-image" />
  										</a>
  									</div>
  								</div>
  							</div>
  						<?php endforeach; ?>

  					</div>
  				</div>

  				<div class="col-12">
  					<div class="button">
  						<a class="btn primary" href="<?= BASE_URL; ?>/photos">VER LISTA COMPLETA</a>
  					</div>
  				</div>

  			</div>
  		</div>
  	</div>
  </section>

  <!-- Call To Action -->
  <section class="call-to-action section" data-stellar-background-ratio="0.5">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-6 col-12 wow fadeInUp">
  				<div class="call-to-main">
  					<h2>Nossa Missão <br> <span style="font-size:12px;"> DDTIZA-ID </span> </h2> <br>
  					<p><?= $info_about['sobre_missao']; ?></p>
  					<a href="<?= BASE_URL; ?>/contact" class="btn">ORÇAMENTO</a>
  					<!-- Seção de Edição -->
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- Blogs Area -->
  <section class="blogs-main section" style="background:#ff6f12;">
  	<div class="container" style="background:#fff;padding:50px;">
  		<!-- Titulo -->
  		<div class="row">
  			<div class="col-12 wow fadeInUp">
  				<div class="section-title">
  					<h1>Depoimentos</h1>
  				</div>
  			</div>
  		</div>

  		<!-- Slider Depoimentos -->
  		<div class="row">
  			<div class="col-12">
  				<div class="row blog-slider">
  					<!-- Card de Depoimento -->
  					<?php foreach ($list_depo as $depo) : ?>
  						<div class="col-lg-4 col-12">
  							<div class="single-blog">
  								<div class="blog-head">
  									<img src="<?= BASE_URL; ?>/painel/assets/images/<?= $depo['images']; ?>" alt="#">
  								</div>
  								<div class="blog-bottom">
  									<div class="blog-inner">
  										<h4><a href="javascript:void(0);"><?= $depo['name']; ?></a></h4>
  										<p><?= $depo['depoiment']; ?></p>
  									</div>
  								</div>
  							</div>
  						</div>
  					<?php endforeach; ?>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>