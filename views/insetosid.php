<style>

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
              <p><?= $info_inseto['article']; ?></p>
            <?php else : ?>
              <p>Não há informações adcionais</p>
            <?php endif; ?>
          </article>
        </div>
      </div>

    </div>
  </div>
</section>
<!--/ End Services -->