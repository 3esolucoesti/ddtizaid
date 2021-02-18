<?php include_once('views/header.php'); ?>

<style type="text/css">
  .mapForm {
    height: 450px;
  }

  .mapForm iframe {
    width: 100%;
    height: 100%;
  }

  .form-group input,
  .form-group textarea {
    background: #eaeaea;
  }
</style>

<script type="text/javascript">
  $(document).ready(function() {
    $('.m5').addClass('active2');
  });
</script>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
  <div class="container">
    <div class="col-12">
      <h2><i class="fa fa-pencil"></i>Fale Conosco</h2>
      <ul>
        <li><a href="<?= BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
        <li class="active"><a href="<?= BASE_URL; ?>/contact"><i class="fa fa-clone"></i>Contato</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- Start Contact -->
<section id="contact-us" class="contact-us section" style="background:#ff6f12;">
  <div class="container p-5" style="background:#fff;">
    <!-- Title -->
    <div class="section-title col-12">
      <h1>Fale Conosco</h1>
    </div>

    <!-- Content -->
    <div class="col-12">
      <div class="contact-main row">
        <!-- Contact Form -->
        <div class="form-main col-lg-8 col-12">

          <div class="text-content">
            <h2>Envie uma mensagem para nós</h2>
          </div>

          <form class="form row" method="post" action="mail/mail.php">
            <div class="col-lg-6 col-12 form-group">
              <input type="text" name="name" placeholder="Nome" required disabled>
            </div>

            <div class="col-lg-6 col-12 form-group">
              <input type="email" name="email" placeholder="E-mail" required disabled>
            </div>


            <div class="col-lg-6 col-12 form-group">
              <input type="text" name="phone" placeholder="Telefone" required disabled>
            </div>

            <div class="col-lg-6 col-12 form-group">
              <input type="text" name="assunto" placeholder="Assunto" required disabled>
            </div>

            <div class="col-lg-12 col-12 form-group">
              <textarea name="message" rows="6" placeholder="Digite sua mensagem"></textarea>
            </div>

            <div class="col-lg-12 col-12 form-group button">
              <button type="submit" class="btn btn-disabled" disabled>Enviar mensagem</button>
            </div>
          </form>
        </div>

        <!-- Contact Address -->
        <div class="contact-address col-lg-4 col-12">
          <!-- Address -->
          <div class="contact">
            <h2>Nosso endereço de contato</h2>
            <ul class="address">
              <li> <i class="fa fa-map-marker"></i>
                Endereço: <?= $info_home['endereco'];?>
              </li>

              <li> <i class="fa fa-phone"></i>
                Telefone: <?= $info_home['phone01'];?>
              </li>

              <li> <i class="fa fa-whatsapp"></i>
                Celular: <?= $info_home['cell01'];?>
              </li>

              <li> <i class="fa fa-envelope-o"></i>
                Email: <a href="mailto:<?= $info_home['email01'];?>"><?= $info_home['email01'];?></a>
              </li>
            </ul>
          </div>

          <!-- Social -->
          <ul class="social">
            <li class="active">
              <a href="<?= $info_home['linkrede01'];?>">
                <i class="fa fa-facebook"></i>
                Facebook
              </a>
            </li>

            <li>
              <a href="<?= $info_home['linkrede03'];?>">
                <i class="fa fa-instagram"></i>
                Instagram
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="mapForm">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15033.219173666406!2d-43.224133!3d-19.614263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7d7a4a03f1a2622!2sDDtiza-ID%20Desentupidora%20e%20Loc%20Banheiro!5e0!3m2!1sen!2sbr!4v1611262751477!5m2!1sen!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php include_once('views/footer.php'); ?>