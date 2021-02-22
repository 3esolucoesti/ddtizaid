<?php include_once('views/header.php'); ?>

<style>
  .d-flex {
    display: flex;
  }

  .align-center {
    align-content: center;
  }

  .justify-center {
    justify-content: center;
  }

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

  .mvp .modal-body .tab-content textarea {
    height: 100px;
  }
</style>

<script>
  $(document).ready(function() {
    $('.m2').addClass('active2');
  });
</script>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><i class="fa fa-pencil"></i>Sobre nós</h2>
        <ul>
          <li><a href="<?= BASE_URL; ?>/painel/pghome"><i class="fa fa-home"></i>Home</a></li>
          <li class="active"><a href="<?= BASE_URL; ?>/painel/pgabout"><i class="fa fa-clone"></i>Sobre nós</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Modal - Editar "Sobre Nós" -->
<div id="modal_EditAbout" class="modal fade mt-5" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content text-left">

      <div class="modal-header">
        <button type="button" class="d-none close" data-dismiss="modal">&times;</button>
        <div class="col">
          <h5 class="modal-title text-uppercase text-center">Editar "Sobre Nós"</h5>
        </div>
      </div>

      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">
          <ul class="nav nav-tabs" style="flex-flow: nowrap; gap: 1px;">
            <li class="active" style="width: 100%;">
              <button class="btn btn-info btn-block" data-toggle="tab" href="#mainSection">
                Seção Principal
              </button>
            </li>
            <li style="width: 100%;">
              <button class="btn btn-info btn-block" data-toggle="tab" href="#subSection">
                Subseção
              </button>
            </li>
          </ul>

          <!-- Conteudo das abas -->
          <div class="tab-content mt-3">
            <!-- Seção Principal -->
            <div id="mainSection" class="tab-pane active">
              <h5>Seção Principal</h5>
              <div class="d-flex justify-center mt-5">
                <div class="imgSobre text-center">
                  <img src="<?= BASE_URL; ?>/painel/assets/images/<?= $info_about['images']; ?>" height="300" alt="" />
                  <label>Imagem Atual</label>
                </div>
              </div>

              <div class="mt-3">
                <label>Alterar Imagem: </label><strong style="color: red;font-size: .9em;"> ( OBS: TAMANHO MÁXIMO 1MB / 500px X 400px )</strong>
                <input type="file" name="about_photo" class="form-control ">

                <label class="mt-3">Alterar Titulo:</label>
                <input type="text" name="about_title" class="form-control" value="<?= $info_about['sobre_titulo'] ?>" required>

                <label class="mt-3">Alterar paragrafo:</label>
                <textarea class="form-control" name="about_description" required><?= $info_about['sobre_desc'] ?></textarea>
              </div>
            </div>

            <!-- Subseção -->
            <div id="subSection" class="tab-pane ">
              <h5>Subseção</h5>
              <div class="form-group mt-3">
                <label>Missão</label>
                <textarea name="about_mission" class="form-control" required><?= $info_about['sobre_missao'] ?></textarea>
              </div>

              <div class="form-group mt-3">
                <label>Visão</label>
                <textarea name="about_vision" class="form-control" required><?= $info_about['sobre_visao'] ?></textarea>
              </div>

              <div class="form-group mt-3">
                <label>Valores</label>
                <textarea name="about_values" class="form-control" required><?= $info_about['sobre_valores'] ?></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

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

  <!-- Seção de Edição -->
  <div class="barraEditarHome container">
    <button type="button" class="btnEditGeral" data-target="#modal_EditAbout" data-toggle="modal">
      Editar Seção
      <i class="fa fa-cogs"></i>
    </button>
  </div>

</section>

<?php include_once('views/footer.php'); ?>