<?php include_once('views/header.php'); ?>

<style>
  .modal {
    z-index: 9999;
  }

  .form-group span {
    color: red;
  }

  .portfolio-single {
    padding: 0.5em;
    transition: background-color 250ms ;
  }

  .portfolio-single:hover {
    padding: 0.5em;
    background-color: #d5d5d5;
  }
</style>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><i class="fa fa-pencil"></i>Galeria de Fotos</h2>
        <ul>
          <li><a href="<?= BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
          <li class="active"><a href="<?= BASE_URL; ?>/photos"><i class="fa fa-clone"></i>Fotos</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.m4').addClass('active2');

    //EXCLUIR MODAL 
    $('.delete-button').on('click', function() {
      var id = $(this).attr('data-id');
  
      $('.idField').val(id);
  
      $('#del-modal').modal('show');
    });
  
    $('.del-confirmation').on('click', function() {
      var id = $('.idField').val();
      window.location.href = "<?= BASE_URL; ?>/painel/pgphotos/deletephoto/" + id;
    });
  });

</script>

<!-- Modal Adicionar -->
<div id="add-modal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header mx-auto">
        <h5 class="modal-title">ADCIONAR NOVA IMAGEM</h5>
      </div>

      <div class="modal-body">
        <form id="add-inseto" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Escolher Imagem:</label>
            <span>( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</span>
            <input type="file" name="addImage" class="form-control addImage" required>
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

<!-- Modal Deletar -->
<div id="del-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content mt-5 p-3">
      <div class="modal-body text-center">
        <div>
          <i class="fa fa-exclamation-triangle"></i> <br><br>
          <strong style="color: red;" class="atencion"> ATENÇÃO!</strong>
        </div>

        <p class="titleExcluir">Tem certeza que deseja excluir?</p>

        <div class="mt-3">
          <button class="btn btn-success del-confirmation">SIM</button>
          <button class="btn btn-danger" data-dismiss="modal">NÃO</button>
        </div>
        <input type="hidden" name="id" class="form-control idField" required />
      </div>
    </div>
  </div>
</div>

<!-- Portfolio -->
<section id="portfolio" class="portfolio section" style="background:#ff6f12;">
  <!-- Add Photos -->
  <div class="barraEditarHome container">
    <a href="<?= BASE_URL; ?>/painel/pginsetos/#" class="btnEditGeral" data-target="#add-modal" data-toggle="modal">
      Adcionar Fotos
      <i class="fa fa-cogs"></i>
    </a>
  </div>
  <div class="container" style="background:#fff;padding:50px;">
    <!-- Title -->
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <div class="">
          <!-- <span class="title-bg">Galeria</span> -->
          <h1 style="line-height: 0;color:#ff6f12;">Galeria de Fotos</h1>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <div class="row">
      <!-- portfolio Nav -->
      <div class="col-12">
        <div class="portfolio-nav">
          <ul class="tr-list list-inline" id="portfolio-menu">
          </ul>
        </div>
      </div>
      <!--/ End portfolio Nav -->
    </div>

    <!-- Content -->
    <div class="portfolio-inner">
      <div class="row">
        <div class="col-12">
          <!-- Single portfolio -->
          <div id="portfolio-item">
            <?php foreach ($photos as $photo) : ?>
              <div class="cbp-item website animation printing">
                <div class="portfolio-single">
                  <div class="portfolio-head">
                    <a href="<?= BASE_URL; ?>/painel/assets/images/<?= $photo['image']; ?>" class="example-image-link" data-lightbox="example-set">
                      <img src="<?= BASE_URL; ?>/painel/assets/images/<?= $photo['image']; ?>" alt="#" class="example-image" />
                    </a>
                  </div>
                  <div class='mt-3'>
                    <a href="#" class="btn btn-danger delete-button" data-target="#del-modal" data-toggle="modal" data-id="<?= $photo['id']; ?>">Deletar</a>
                  </div>
                </div>
              </div>
              <!--/ End portfolio -->
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

<?php include_once('views/footer.php'); ?>