<?php include_once('views/header.php'); ?>

<style>
  .single-service:hover {
    background: #e5e5e5;
  }

  .modal {
    z-index: 9999;
  }

  .modal-content {
    background: #eaeaea;
  }

  .modal .modal-content .modal-title {
    width: 100%;
    text-align: center;
    font-weight: bold;
  }

  .modal .modal-content .modal-body .preview-container {
    width: 100%;
    text-align: center;
  }

  .modal .modal-content .modal-body .preview-container img {
    margin: 0 auto;
  }

  .modal .modal-content .form-group span {
    color: red;
    font-size: .9em;
  }

  .modal .modal-content .form-group textarea {
    height: 150px;
  }
</style>

<script type="text/javascript">
  $(function() {
    $('.edit-button').on('click', function() {
      var id = $(this).attr('data-id');
      const route = `<?= BASE_URL; ?>/painel/pginsetos/getInseto/${id}`;

      // Ajax function that GET a response in json format
      $.getJSON(route, {}, (res) => {
        $('.img-preview').html('<img src="<?= BASE_URL; ?>/painel/assets/images/' + res.image + '" height="200" alt="" border="0" />');
        $('.editName').val(res.name);
        $('.editDescription').val(res.description);
        $('.idField').val(id);

        $('.edit-modal').modal('show');
      });

    });

    //EXCLUIR MODAL 
    $('.delete-button').on('click', function() {
      var id = $(this).attr('data-id');

      $('.idField').val(id);

      $('#del-modal').modal('show');
    });
    $('.del-confirmation').on('click', function() {
      var id = $('.idField').val();

      window.location.href = "<?= BASE_URL; ?>/painel/pginsetos/deleteinseto/" + id;
    });
  });
</script>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><i class="fa fa-pencil"></i>Inseto</h2>
        <ul>
          <li><a href="<?= BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
          <li class="active"><a href="<?= BASE_URL; ?>/services"><i class="fa fa-clone"></i>Inseto</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Set Navbar Active Menu -->
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
        <h5 class="modal-title">ADCIONAR INSETOS</h5>
      </div>

      <div class="modal-body">
        <form id="add-inseto" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Escolher Imagem:</label>
            <span>( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</span>
            <input type="file" name="addImage" class="form-control addImage" required>
          </div>

          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="addName" class="form-control addName" required>
          </div>

          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control addDescription" name="addDescription" required></textarea>
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

<!-- Modal Editar -->
<div id="edit-modal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EDITAR INSETO</h5>
      </div>

      <div class="modal-body">

        <form id="edit-inseto" method="POST" enctype="multipart/form-data">
          <div class="preview-container">
            <div class="img-preview"></div>
            <label>Imagem Atual</label>
          </div>

          <div class="form-group">
            <label>Escolher Imagem:</label>
            <span>( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</span>
            <input class="form-control editImage" name="editImage" type="file">
          </div>

          <div class="form-group">
            <label>Nome</label>
            <input class="form-control editName" name="editName" required>
          </div>

          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control editDescription" name="editDescription" required></textarea>
          </div>

          <input type="text" name="id" class="idField" hidden>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit" form="edit-inseto">Editar</button>
        <button class="btn btn-danger" type="button" data-dismiss="modal">CANCELAR</button>
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

<section id="services" class="services archives section" style="background:#ff6f12;">
  <!-- Adcionar Insetos -->
  <div class="barraEditarHome container">
    <a href="<?= BASE_URL; ?>/painel/pginsetos/#" class="btnEditGeral" data-target="#add-modal" data-toggle="modal">
      Adcionar Insetos
      <i class="fa fa-cogs"></i>
    </a>
  </div>
  <!-- Services -->
  <div class="container p-5" style="background:#fff;">
    <!-- Title -->
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <span class="title-bg"></span>
          <h1>Insetos</h1>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="row">
      <?php $IMG_URL = BASE_URL . "/painel/assets/images/"; ?>
      <?php foreach ($info_insetos as $inseto) : ?>
        <!-- Single Service -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-service">
            <img src="<?= $IMG_URL . $inseto['image']; ?>" alt="<?= $inseto['name'] ?>" />
            <h2><?= $inseto['name'] ?></h2>
            <p><?= $inseto['description'] ?></p>
            <a href="<?= BASE_URL; ?>/painel/pginsetos/?id=<?= $inseto['id']; ?>" class="btn btn-default mt-4" style="background:#ff6f12;color:white;">SAIBA MAIS</a>
            <div class="edit-buttons mt-3">
              <a href="#" class="btn btn-info edit-button" data-target="#edit-modal" data-toggle="modal" data-id="<?= $inseto['id']; ?>">Editar</a>
              <a href="#" class="btn btn-danger delete-button" data-target="#del-modal" data-toggle="modal" data-id="<?= $inseto['id']; ?>">Deletar</a>
            </div>
          </div>
        </div>
        <!-- End Single Service -->
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--/ End Services -->

<?php include_once('views/footer.php'); ?>