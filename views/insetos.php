<style>
	.services .single-service {
		/* min-height: 500px !important; */
	}

	@media all and (min-width: 480px) {
		.services .single-service {
			/* min-height: 600px !important; */
		}
	}
</style>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><i class="fa fa-pencil"></i>Inseto</h2>
				<ul>
					<li><a href="<?php echo BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
					<li class="active"><a href="<?php echo BASE_URL; ?>/services"><i class="fa fa-clone"></i>Inseto</a></li>
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
						<a href="<?= BASE_URL; ?>/insetos/insetosid/<?= $inseto['id']; ?>" class="btn btn-default mt-4" style="background:#ff6f12;color:white;">SAIBA MAIS</a>
					</div>
				</div>
				<!-- End Single Service -->
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--/ End Services -->