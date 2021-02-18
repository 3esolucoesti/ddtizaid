<style>

</style>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><i class="fa fa-pencil"></i>Galeria de Fotos</h2>
				<ul>
					<li><a href="<?php echo BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
					<li class="active"><a href="<?php echo BASE_URL; ?>/photos"><i class="fa fa-clone"></i>Fotos</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--/ End Breadcrumbs -->

<script>
	$(document).ready(function() {
		$('.m4').addClass('active2');
	});
</script>

<!-- Portfolio -->
<section id="portfolio" class="portfolio section" style="background:#ff6f12;">
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
<!--/ End portfolio -->