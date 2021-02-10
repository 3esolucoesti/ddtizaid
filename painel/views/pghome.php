<?php include_once('views/header.php'); ?>

<style>
  .call-to-action {
    background-image: url('<?php echo BASE_URL; ?>/assets/images/call-to-action.jpg');
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

  .services .single-service {
    /* min-height: 400px !important; */
  }

  @media all and (min-width: 480px) {
    .services .single-service {
      /* min-height: 350px !important; */
    }
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
        <li data-target="#demo" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>"></li>
      <?php endfor ?>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <?php foreach ($list_slide as $slide) : ?>
        <div class="carousel-item <?php echo ($slide['id'] == $primeiro_slide['id']) ? 'active' : ''; ?>">
          <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $slide['images']; ?>" alt="Los Angeles">
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

  <div class="barraEditarHome">
    <a href="<?php echo BASE_URL; ?>/painel/pghome/lista_slide" class="btnEditGeral"> Editar Slide <i class="fa fa-cogs"></i></a>
  </div>
</center>

<!-- Sobre -->
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
  <!-- Seção de Edição -->
  <div class="barraEditarHome container">
    <a href="<?php echo BASE_URL; ?>/painel/pgabout" class="btnEditGeral">
      Ir a pagina "Sobre" para editar
      <i class="fa fa-cogs"></i>
    </a>
  <div>
</section>

<!-- Serviços -->
<section id="services" class="services section" style="background:#ff6f12;">
  <div class="container" style="background:#fff;padding:50px;">
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
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 1</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 2</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>
          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 3</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 4</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 5</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 6</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 7</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 8</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 9</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-lightbulb-o"></i>
            <h2><a href="<?php echo BASE_URL; ?>/services">Serviço 10</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis libero debitis quis quaerat maiores non alias reprehenderit autem odit! Excepturi, fugiat? Debitis quidem nisi iusto numquam rem fugiat harum.</p>

          </div>
          <!-- End Single Service -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Conquistas -->
<section id="fun-facts" class="fun-facts section" style="background:#ff6f12;">
  <div class="container" style="background:#fff;padding:10px;">
    <div class="row">

      <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
        <div class="text-content">
          <div class="section-title">
            <h1><span>METAS</span>Conquistas</h1>
            <p><?php echo $info_home['textoconquistas'] ?></p>
            <a href="<?php echo BASE_URL; ?>/painel/pgcontact" class="btn primary">ORÇAMENTO</a>
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
                <p><span class="count"><?php echo $info_home['ffclients'] ?></span></p>
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
                <p><span class="count"><?php echo $info_home['ffservices'] ?></span></p>
                <h4>Tipos de Serviços</h4>
              </div>
            </div>
            <!--/ End Single Fact -->
          </div>
          <div class="col-lg-12 col-md-6 col-12 wow fadeIn" data-wow-delay="1.2s">
            <!-- Single Fact -->
            <div class="single-fact" style="display:flex;justify-content:center;">
              <div class="icon"><i class="fa fa-trophy"></i></div>
              <div class="counter">
                <p><span class="count"><?php echo $info_home['ffmarket'] ?></span></p>
                <h4>Anos no mercado</h4>
              </div>
            </div>
            <!--/ End Single Fact -->
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="barraEditarHome container">
    <div class="wow fadeIn" data-wow-delay="0.5s">
      <a href="<?php echo BASE_URL; ?>/painel/pghome/lista_slide" class="btnEditGeral" data-target="#editConquistas" data-toggle="modal">
        Editar Conquistas
        <i class="fa fa-cogs"></i>
      </a>

      <!-- Editar Conquistas -->
      <div id="editConquistas" class="modal fade mt-5" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content text-left">

            <div class="modal-header">
              <button type="button" class="d-none close" data-dismiss="modal">&times;</button>
              <div class="col">
                <h5 class="modal-title text-uppercase text-center">Editar Conquistas</h5>
              </div>
            </div>

            <div class="modal-body">
              <form method="POST" enctype="multipart/form-data">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <button class="btn btn-info" data-toggle="tab" href="#mainText">
                      Texto Principal
                    </button>
                  </li>
                  <li>
                    <button class="btn btn-info btn-lg" data-toggle="tab" href="#funFacts">
                      Fatos Interessantes
                    </button>
                  </li>
                </ul>

                <div class="tab-content mt-3">

                  <div id="mainText" class="tab-pane active">
                    <h3>Texto Principal</h3>
                    <div class="form-group mt-3">
                      <label>Descreva sobre as conquistas no campo abaixo</label>
                      <textarea class="form-control" name="textoConquistas" placeholder="Digite aqui" required><?php echo $info_home['textoconquistas']; ?></textarea>
                    </div>
                  </div>

                  <div id="funFacts" class="tab-pane ">
                    <h3>Fatos Interessantes</h3>
                    <div class="form-group">
                      <label>Clientes Satisfeitos</label>
                      <input name="funFactsClients" class="form-control" type="text" value="<?php echo $info_home['ffclients']; ?>">
                    </div>

                    <div class="form-group">
                      <label>Tipos de Serviços</label>
                      <input name="funFactsServices" class="form-control" type="text" value="<?php echo $info_home['ffservices']; ?>">
                    </div>

                    <div class="form-group">
                      <label>Anos no Mercado</label>
                      <input name="funFactsMarketYears" class="form-control" type="text" value="<?php echo $info_home['ffmarket']; ?>">
                    </div>

                  </div>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                  <button type="submit" class="btn btn-primary">ATUALIZAR</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div>
</section>

<!-- Galeria -->
<section id="portfolio" class="portfolio section" style="background:#ff6f12;">
  <div class="container" style="background:#fff;padding:50px;padding: 50px;">
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <div class="">
          <!-- <span class="title-bg">Galeria</span> -->
          <h1 style="line-height: 0;color:#ff6f12;">Algumas Fotos</h1>
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
                  <a href="<?php echo BASE_URL; ?>/assets/images/foto1.jpg" class="example-image-link" data-lightbox="example-set"> <img src="<?php echo BASE_URL; ?>/assets/images/foto1.jpg" alt="#" class="example-image" /></a>
                </div>
              </div>
            </div>
            <!--/ End portfolio -->
            <!-- Single portfolio -->
            <div class="cbp-item website package development">
              <div class="portfolio-single">
                <div class="portfolio-head">
                  <a href="<?php echo BASE_URL; ?>/assets/images/foto2.jpg" class="example-image-link" data-lightbox="example-set"> <img src="<?php echo BASE_URL; ?>/assets/images/foto2.jpg" alt="#" class="example-image" /></a>
                </div>
              </div>
            </div>
            <!--/ End portfolio -->
            <!-- Single portfolio -->
            <div class="cbp-item website animation">
              <div class="portfolio-single">
                <div class="portfolio-head">
                  <a href="<?php echo BASE_URL; ?>/assets/images/foto3.jpg" class="example-image-link" data-lightbox="example-set"> <img src="<?php echo BASE_URL; ?>/assets/images/foto3.jpg" alt="#" class="example-image" /></a>
                </div>
              </div>
            </div>
            <!--/ End portfolio -->
            <!-- Single portfolio -->
            <div class="cbp-item development printing">
              <div class="portfolio-single">
                <div class="portfolio-head">
                  <a href="<?php echo BASE_URL; ?>/assets/images/foto4.jpg" class="example-image-link" data-lightbox="example-set"> <img src="<?php echo BASE_URL; ?>/assets/images/foto1.jpg" alt="#" class="example-image" /></a>
                </div>
              </div>
            </div>
            <!--/ End portfolio -->
            <!-- Single portfolio -->
            <div class="cbp-item development package">
              <div class="portfolio-single">
                <div class="portfolio-head">
                  <a href="<?php echo BASE_URL; ?>/assets/images/foto5.jpg" class="example-image-link" data-lightbox="example-set"> <img src="<?php echo BASE_URL; ?>/assets/images/foto2.jpg" alt="#" class="example-image" /></a>
                </div>
              </div>
            </div>
            <!--/ End portfolio -->
            <!-- Single portfolio -->
            <div class="cbp-item website animation printing">
              <div class="portfolio-single">
                <div class="portfolio-head">
                  <a href="<?php echo BASE_URL; ?>/assets/images/foto6.jpg" class="example-image-link" data-lightbox="example-set"> <img src="<?php echo BASE_URL; ?>/assets/images/foto3.jpg" alt="#" class="example-image" /></a>
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

<!-- Missão -->
<section class="call-to-action section" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 wow fadeInUp">
        <div class="call-to-main">
          <h2>Nossa Missão <br> <span style="font-size:12px;"> DDTIZA-ID </span> </h2> <br>
          <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim feugiat, facilisis arcu vehicula, consequat sem. Cras et vulputate nisi, ac dignissim mi. Etiam laoreet</p>
          <a href="<?php echo BASE_URL; ?>/contact" class="btn">ORÇAMENTO</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Area de Depoimentos -->
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

  <!-- Edição de depoimentos -->
  <div class="barraEditarHome container">
    <a href="<?= BASE_URL; ?>/painel/pgdepoiments/lista_depoiments" class="btnEditGeral">
      Editar Depoimentos
      <i class="fa fa-cogs"></i>
    </a>
  </div>
</section>

<?php include_once('views/footer.php'); ?>