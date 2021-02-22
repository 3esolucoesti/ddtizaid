<style>
	
</style>

<!-- Breadcrumbs -->
<section class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><i class="fa fa-pencil"></i>Serviços</h2>
				<ul>
					<li><a href="<?php echo BASE_URL; ?>"><i class="fa fa-home"></i>Home</a></li>
					<li class="active"><a href="<?php echo BASE_URL; ?>/services"><i class="fa fa-clone"></i>Serviços</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.m3').addClass('active2');
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
					<h1>Serviços</h1>
				</div>
			</div>
		</div>

		<!-- Services Container -->
		<div class="row">
			<?php foreach ($services as $service) : ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-service">
						<i class="fa fa-lightbulb-o"></i>
						<h2><a href="#"><?= $service['title']; ?></a></h2>
						<p><?= $service['description']; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
