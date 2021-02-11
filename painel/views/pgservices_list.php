<?php include_once('views/headerAuxiliar.php'); ?>

<style type="text/css" media="screen">
  body {
    background-color: #c28630;
  }

  .voltarParaoSite {
    position: fixed;
    width: 100%;
    color: white;
  }

  .voltarParaoSite div {
    background-color: #104E8B;
    width: max-content;
    padding: 10px;
  }

  .voltarParaoSite div:hover {
    background-color: #1874CD;
  }

  .voltarParaoSite div a {
    color: white;
  }

  .containerr {
    width: 100%;
    min-height: 300px;
    margin: auto;
    background-color: #c28630;
    margin-top: 0px;
  }

  .cabecalho {
    min-height: 50px;
    background-color: #a16003;
  }

  .cabecalho .tituPrin {
    text-align: center;
    width: 100%;
  }

  .cabecalho .tituPrin label {
    font-size: 2.5em;
    color: white;
    margin-top: 100px;
    font-weight: bold;
    margin-bottom: 60px;
  }

  .btn-sucess {
    background-color: #5cb85c;
    border-color: #4cae4c;
    color: white;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 10px;
  }

  .btn-sucess:hover {
    background-color: #4ea74e;
    color: #e9e9e9;
  }

  .btn-primary {
    background-color: #337ab7;
    border-color: #2e6da4;
    color: white;
  }

  .btn-primary:hover {
    background-color: #236399;
    color: #e9e9e9;
  }

  .containerr .divAddInden {
    width: 98%;
    margin: auto;
    margin-top: 50px;
    background-color: #a16003;
  }

  .containerr table {
    width: 98%;
    margin: auto;
    margin-top: 0px;
    background-color: transparent;
  }

  .containerr table th {}

  .imgSlideEditar img {
    border: 5px solid #e9e9e9;
    border-radius: 5px;
  }

  /*EXCLUIR MODAL*/
  .fa-exclamation-triangle {
    color: #FFB90F;
    font-size: 4em;
    margin-bottom: -15px;
  }

  .atencion {
    font-size: 2em;
  }

  .titleExcluir {
    text-align: center;
    font-size: 1.2em;
    margin-top: 10px;
  }

  .imgTable {
    width: 50px;
    height: 50px;
    border: 2px solid #e9e9e9;
    border-radius: 5px;
  }

  .tituTable {
    width: 200px;
  }

  .acoesTable {
    width: 230px;
  }

  .modal form .form-group textarea {
    height: 150px;
  }

  .modal .modal-content{
    background-color: #eaeaea;
  }
</style>

<script type="text/javascript">
  $(function() {

    $('.clickEditDepo').on('click', function() {
      var id = $(this).attr('data-id');

      $.ajax({
        url: '<?= BASE_URL; ?>/painel/ajax/conteudoPgService',
        type: 'POST',
        dataType: 'json',
        data: {
          id: id
        },
        success: function(json) {

          // $('.edit-icon').html('<img src="<?= BASE_URL; ?>/painel/assets/images/' + json.images200 +
          //   '" height="200" alt="" border="0" />');
          $('.edit_title').val(json.title);
          $('.edit_description').val(json.description);
          $('.edit_service_id').val(id);

          $('.edit-services').modal('show');
        },
        error: function() {
          console.log("ERROR: ");
        }
      });
    });

    //EXCLUIR MODAL 
    $('.clickDelDepo').on('click', function() {
      var id = $(this).attr('data-id');
      $('.edit_service_id').val(id);
      $('#deleteDepoi').modal('show');
    });

    $('.simDelEscolher').on('click', function() {
      var id = $('.edit_service_id').val();
      window.location.href = "<?= BASE_URL; ?>/painel/pgservices/deleteServiceId/" + id;
    });
  });
</script>

</head>

<body>
  <div class="voltarParaoSite">
    <div>
      <i class="fa fa-arrow-left"></i>
      <a href="<?= BASE_URL; ?>/painel/pgservices">
        Voltar para a pagina "Serviços"
      </a>
    </div>
  </div>

  <div class="container-fluid p-0 m-0">
    <!-- Modal Permissão Negada -->
    <div class="modal fade" id="naoTemPermissao" data-backdrop="static" role="dialog" style="position: fixed;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <center>
              <h1 style="font-weight: bold;color: red;">ATENÇÃO!</h1>
            </center>
            <button type="button" class="close" data-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <center>
              <h4 style="color: black;">VOCÊ NÃO TEM PERMISSÃO PARA <strong
                  style="color: blue;font-weight: bold;text-decoration: underline;">ALTERAR</strong> e/ou <strong
                  style="color: blue;font-weight: bold;text-decoration: underline;">EXCLUIR</strong> e/ou <strong
                  style="color: blue;font-weight: bold;text-decoration: underline;"> ENTRAR</strong> NESSA AREA!</h4>
            </center>
          </div>
          <div class="modal-footer">
            <a href="<?= BASE_URL; ?>/painel" type="button" class="btn btn-default">SAIR</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Deletar -->
    <div class="modal fade" id="deleteDepoi" data-backdrop="static" role="dialog"
      style="position: fixed;z-index: 999999;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-body">
            <div class="text-center">
              <i class="fa fa-exclamation-triangle"></i>
              <strong style="font-weight: bold;color: red;" class="atencion"> ATENÇÃO!</strong>
            </div>

            <p class="titleExcluir">Tem certeza que deseja excluir?</p>

            <div class="text-center">
              <div>
                <a href="javascript:;" type="button" class="btn btn-success simDelEscolher">SIM</a>
                <a href="javascript:;" type="button" class="btn btn-danger" data-dismiss="modal">NÃO</a>
              </div>
            </div>

            <input type="hidden" name="idSlideDell" class="form-control idSlideDell" required />
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Adicionar -->
    <div id="add-services" class="modal fade" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content container">
          <div class="modal-header">
            <h4 class="modal-title container text-center">ADCIONAR SERVIÇO</h4>
          </div>

          <div class="modal-body">
            <form id="add-form" method="POST" enctype="multipart/form-data">
              
              <!-- <div class="form-group">
                <label>Escolher Imagem:</label> <strong style="color: red;font-size: .9em;">( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</strong>
                <input type="file" name="photoDepo" class="form-control photoDepo" required>
              </div> -->
              
              <div class="form-group">
                <label>Título</label>
                <input class="form-control" name="service_title" placeholder="Digite aqui" required>
              </div>

              <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" name="service_description" placeholder="Digite aqui" required></textarea>
              </div>

            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
            <button type="submit" class="btn btn-primary" form="add-form" >ADICIONAR</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Editar -->
    <div id="edit-services" class="modal fade edit-services" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title container text-center">EDITAR SERVIÇO</h3>
          </div>

          <div class="modal-body">

            <!-- <center>
              <div class="edit-icon"></div>
              <label>Imagem Atual</label>
            </center> -->

            <form id="edit-form" method="POST" enctype="multipart/form-data">

              <!-- <label>Alterar Imagem: </label><strong style="color: red;font-size: .9em;"> ( OBS: TAMANHO MÁXIMO 1MB /
                400px X 400px )</strong>
              <input type="file" name="photoDepoEditar" class="form-control photoDepoEditar"> -->
              <div class="form-group">
                <label>Alterar Titulo</label>
                <input type="text" name="edit_title" class="form-control edit_title" required>
              </div>

              <div class="form-group">
                <label>Alterar Descrição:</label>
                <textarea class="form-control edit_description" name="edit_description" style="height: 150px;"
                required></textarea>
              </div>

              <div class="form-group">
                <input type="hidden" name="edit_service_id" class="form-control edit_service_id" required />
              </div>

            </form>
            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
            <button type="submit" form="edit-form" class="btn btn-primary">ATUALIZAR</button>
          </div>
        </div>
      </div>
    </div>

    <div class="containerr">
      <div class="cabecalho">
        <div class="tituPrin">
          <label>ÁREA SERVIÇOS</label>
        </div>
      </div>

      <div class="divAddInden">
        <a href="<?= BASE_URL; ?>/painel/pghome" class="btn btn-info ml-3">
          <i class="fa fa-arrow-left"></i>
          VOLTAR EDITAR PÁGINA SERVIÇOS
        </a>

        <a href="<?= BASE_URL; ?>/painel" class="btn btn-sucess" data-target="#add-services" data-toggle="modal">
          <i class="fa fa-upload"></i>
          ADICIONAR SERVIÇOS
        </a>
      </div>

      <table class="table table-bordered">

        <thead>
          <tr>
            <!-- <th width="50">IMAGEM</th> -->
            <th class="tituTable">TÍTULO</th>
            <th class="depoiTable">DESCRIÇÃO</th>
            <th class="acoesTable text-center">AÇÕES</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($services_list as $service) : ?>
          <tr>
            <!-- <td><img src="<?= BASE_URL; ?>/painel/assets/images/<?= $service['images120']; ?>" class="imgTable" alt="" /></td> -->
            <td><?= $service['title']; ?></td>
            <td><?= $service['description']; ?></td>
            <td>
              <div class="text-center">

                <a href="javascript:;" class="btn btn-primary md-3 clickEditDepo" data-id="<?= $service['id']; ?>">
                  <i class="fa fa-ravelry"></i>
                  EDITAR
                </a>

                <a href="javascript:;" class="btn btn-danger clickDelDepo" data-id="<?= $service['id']; ?>">
                  <i class="fa fa-trash-o"></i>
                  EXCLUIR
                </a>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>


<?php include_once('views/footerAuxiliar.php'); ?>