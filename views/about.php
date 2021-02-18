<style>
  .mvv {
    max-width: 1280px;
    margin: auto;
    display: flex;
    font-family: 'Arial';
    padding-top: 50px;
    border-top: 2px solid #ff6f12;
    flex-wrap: wrap;
  }

  .mvv div {
    margin-right: 20px;
    margin-bottom: 20px;
  }

  .mvv label {
    font-size: 20px;
    color: #ff6f12;
  }

  .mvv p {
    font-size: 15px;
  }
</style>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><i class="fa fa-pencil"></i>Sobre nós</h2>
        <ul>
          <li><a href="<?php echo BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
          <li class="active"><a href="<?php echo BASE_URL; ?>/about"><i class="fa fa-clone"></i>Sobre nós</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--/ End Breadcrumbs -->

<script>
  $(document).ready(function() {
    $('.m2').addClass('active2');
  });
</script>


<!-- About Us -->
<section class="about-us section" style="background:#ff6f12;">
  <div class="container p-5" style="background:#fff;">
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

    <!-- Subseção -->
    <div class="mvv mt-5">
      <div class="col-12 p-0">
        <label>Missão</label>
        <p><?= $info_about['sobre_missao'] ?></p>
      </div>

      <div class="col-12 p-0">
        <label>Visão</label>
        <p><?= $info_about['sobre_visao'] ?></p>
      </div>

      <div class="col-12 p-0">
        <label>Valores</label>
        <p><?= $info_about['sobre_valores'] ?></p>
      </div>
    </div>
  </div>
</section>
<!--/ End About Us -->