<?php include_once('views/header.php'); ?>

<style>
  .modal {
    z-index: 9999;
  }

  .modal-content {
    background: #eaeaea;
  }
  .modal .modal-content .form-group span {
    color: red;
  }
  .modal .modal-content .form-group textarea {
    height: 150px;
  }
  .img-preview img {
    width: 200px;
  }

  .single-service p {
    text-align: justify;
  }
</style>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><i class="fa fa-pencil"></i>Inseto/Detalhes</h2>
        <ul>
          <li><a href="<?php echo BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
          <li class="active"><a href="<?php echo BASE_URL; ?>/services"><i class="fa fa-clone"></i>Inseto/Detalhes</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--/ End Breadcrumbs -->

<script>
  $(document).ready(function() {
    $('.m6').addClass('active2');
  });
</script>

<!-- Modal Adicionar -->
<div id="add-modal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto">ADCIONAR ARTIGO</h5>
      </div>

      <div class="modal-body">
        <div class='img-preview text-center mb-3'>
          <img class='mx-auto' src="<?= BASE_URL; ?>/painel/assets/images/<?= $info_inseto['image']; ?>" alt="" />
          <span>Imagem Atual</span>
        </div>

        <form id="add-inseto" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Escolher Imagem:</label>
            <span>( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</span>
            <input type="file" name="editImage" class="form-control editImage">
          </div>

          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="editName" class="form-control editName" value="<?= $info_inseto['name'];?>"required>
          </div>

          <div class="form-group">
            <label>Descrição</label>
            <textarea 
              class="form-control editDescription" 
              name="editDescription" 
              required><?= $info_inseto['description'];?></textarea>
          </div>

          <div class="form-group">
            <label>Artigo</label>
            <textarea 
              class="form-control" 
              name="editArticle" 
              placeholder="Digite uma descrição mais aprofundada do tema" 
               ><?= $info_inseto['article'];?></textarea>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="add-inseto">ADICIONAR</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
      </div>
    </div>
  </div>
</div>

<!-- Services -->
<section id="services" class="services archives section" style="background:#ff6f12;">
  <div class="container" style="background:#fff;padding:50px;">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <span class="title-bg"></span>
          <h1>Insetos/Detalhes</h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Single Service -->
        <div class="single-service">

          <img class='mx-auto' src="<?= BASE_URL; ?>/painel/assets/images/<?= $info_inseto['image']; ?>" alt="" />

          <h2><a href="javascript:void(0);"><?= $info_inseto['name']; ?></a></h2>
          <p><?= $info_inseto['description']; ?></p>

          <article class='mt-3'>
            <?php if ($info_inseto['article']) : ?>
              <p><?= $info_inseto['article'];?></p>
            <?php else : ?>
              <p>Não há informações adcionais</p>
            <?php endif; ?>
          </article>
        </div>
      </div>

    </div>

    <div class="row">
      <a href="<?= BASE_URL; ?>/painel/pginsetos/#" class="btnEditGeral mx-auto" data-target="#add-modal" data-toggle="modal">
        Adcionar Artigo
        <i class="fa fa-cogs"></i>
      </a>
    </div>
  </div>
</section>
<!--/ End Services -->

<?php include_once('views/footer.php'); ?>