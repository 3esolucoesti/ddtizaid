<?php include_once('views/header.php'); ?>

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
  <div class="container" style="background:#fff;padding: 50px;">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <!-- <span class="title-bg">Radix</span> -->
          <h1>Sobre nós</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12">
        <!-- Video -->
        <div class="about-video">
          <div class="single-video overlay">
            <img src="<?php echo BASE_URL; ?>/assets/images/about.jpg" alt="#">
          </div>
        </div>
        <!--/ End Video -->
      </div>
      <div class="col-lg-6 col-12">
        <!-- About Content -->
        <div class="about-content">
          <h2>Somos uma empresa profissional em Desentupir!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. You think water moves fast? You should see ice.</p>
          <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a weeked do incididunt magna Lorem</p>
        </div>
        <!--/ End About Content -->
      </div>
    </div>


    <br> <br>

    <div class="mvv">
      <div>
        <label>Missão</label>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloremque rem, eius asperiores accusamus at corrupti aperiam temporibus, laboriosam fugiat quis soluta, delectus in assumenda tempore saepe sed nisi natus!</p>
      </div>
      <div>
        <label>Visão</label>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloremque rem, eius asperiores accusamus at corrupti aperiam temporibus, laboriosam fugiat quis soluta, delectus in assumenda tempore saepe sed nisi natus!</p>
      </div>
      <div>
        <label>Valores</label>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloremque rem, eius asperiores accusamus at corrupti aperiam temporibus, laboriosam fugiat quis soluta, delectus in assumenda tempore saepe sed nisi natus!</p>
      </div>
    </div>



  </div>
</section>
<!--/ End About Us -->

<?php include_once('views/footer.php'); ?>