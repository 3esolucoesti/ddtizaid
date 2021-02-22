<style>
	.modal {
		z-index: 9999;
	}

	.modal .modal-content {
		background: #eaeaea;
	}
</style>

<script>
	$(document).ready(function() {
		//$('.editRodape').modal('show');
	});

	function editRodape(obj) {
		$('.editRodape').modal('show');
	}
</script>


<!-- Modal Edit Footer -->
<div id="editRodape" class="modal fade editRodape" role="dialog" data-backdrop="static" style="position:fixed;">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title mx-auto"> EDITAR RODAPÉ </h4>
			</div>

			<form class="modal-body" method="POST" action="<?= BASE_URL; ?>/painel/pghome/headerfooter">
				<ul class="nav nav-tabs" style='flex-flow: row nowrap; gap:1px;'>
					<li class="active show t3R" style="width:100%;">
						<button class="btn btn-info btn-block" data-toggle="tab" href="#contatoRodape">
							ENDEREÇO / CONTATOS
						</button>
					</li>

					<li class="t2R" style="width:100%;">
						<button class="btn btn-info btn-block" data-toggle="tab" href="#linkRedeRodapoe">
							LINKS REDES SOCIAIS
						</button>
					</li>
				</ul>

				<div class="tab-content">
					<!-- Contact -->
					<div id="contatoRodape" class="tab-pane fade in active show">

						<h5 class='my-3'>Editar Contatos</h5>
						<div class="form-group">
							<label><span style="color:red;">*</span> E-mail:</label>
							<input type="text" name="email_rodape01" value="<?= $info_home['email01']; ?>" class="form-control titleHomeApre" required>
						</div>

						<div class="form-group">
							<label><span style="color:red;">*</span> Telefone:</label>
							<input type="text" name="name_phone" value="<?= $info_home['phone01']; ?>" class="form-control titleHomeApre" required>
						</div>

						<div class="form-group">
							<label><span style="color:red;">*</span> Celular:</label>
							<input type="text" name="name_cel" value="<?= $info_home['cell01']; ?>" class="form-control titleHomeApre" required>
						</div>

						<div class="form-group">
							<label><span style="color:red;">*</span> Endereço:</label>
							<textarea name="endereco__rodape" class="form-control endereco--rodape" style="height:120px;"><?= $info_home['endereco']; ?></textarea>
						</div>
					</div>

					<!-- Social -->
					<div id="linkRedeRodapoe" class="tab-pane fade">
						<h5 class='my-3'>Editar Links Redes Sociais</h5>

						<div class="form-group">
							<label>Link Facebook:</label>
							<input type="text" name="link_01" value="<?= $info_home['linkrede01']; ?>" class="form-control titleHomeApre">
						</div>

						<div class="form-group">
							<label>Link Instagram:</label>
							<input type="text" name="link_03" value="<?= $info_home['linkrede03']; ?>" class="form-control titleHomeApre">
						</div>
					</div>
				</div>

				<div hidden>
					<?php $url = $_GET['url']; ?>
					<input type="hidden" name="pgURL" value="<?= $url ?>">
					<input type="hidden" name="enviourodapeparaeditar" class="enviourodapeparaeditar" value="1" />
				</div>

				<div class="modal-footer">
					<input type="submit" value="ATUALIZAR" class="btn btn-primary">
					<button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Edit Footer Button -->
<div class="barraEditarHome"">
	<button class=" btnEditGeral" onClick="editRodape(this)">
	Editar Rodapé
	<i class="fa fa-cogs"></i>
	</button>
</div>

<!--================ conteudo rodape  =================-->
</div>

<!-- Footer -->
<footer id="footer" class="footer wow fadeIn" style="background:#ff6f12;">
	<!-- Top Arrow -->
	<div class="top-arrow" hidden>
		<a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
	</div>

	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-lg-3 col-md-6 col-12">
					<a href="<?= BASE_URL; ?>/">
						<img src="<?= BASE_URL; ?>/assets/images/TEMPLATE/logo.png" alt="logo" />
					</a>
				</div>

				<!-- Contact -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-widget about">
						<h2>Localização e Contato</h2>

						<ul class="list">
							<li style="color:white;">
								<i style="color:white;" class="fa fa-map-marker"></i>
								Endereço: <?= $info_home['endereco']; ?>
							</li>

							<li style="color:white;">
								<i style="color:white;" class="fa fa-phone"></i>
								Telefone: <?= $info_home['phone01']; ?>
							</li>

							<li style="color:white;">
								<i style="color:white;" class="fa fa-whatsapp"></i>
								Celular: <?= $info_home['cell01']; ?>
							</li>

							<li style="color:white;">
								<i style="color:white;" class="fa fa-envelope-o"></i>
								Email:
								<a href="mailto:<?= $info_home['email01'];?>" style="color:white;">
									<?= $info_home['email01'];?>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-lg-2 col-md-6 col-12">
					<div class="single-widget links">
						<h2>Links Úteis</h2>
						<ul class="list">
							<li style="color:white;">
								<a href="<?= BASE_URL; ?>/" style="color:white;">
									<i class="fa fa-caret-right" style="color:white;"></i>
									Área Restrita
								</a>
							</li>

							<li style="color:white;">
								<a href="<?= LINKWEBMAIL; ?>" target="_blank" style="color:white;">
									<i class="fa fa-caret-right" style="color:white;"></i>
									WebMail
								</a>
							</li>

							<li>
								<a href="<?= $info_home['linkrede01']; ?>" style="font-size: 20px;margin-right:20px;color:white;">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="<?= $info_home['linkrede03']; ?>"  style="font-size: 20px;color:white;">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<!-- Newsletter Widget -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-widget newsletter">
						<h2 style="color:white;">Newsletter</h2>
						<p style="color:white;">Cadastre-se e fique por dentro das nossas novidades.</p>
						<form action="" method="POST" class="formrodape">
							<input placeholder="Seu E-mail" type="email" style="color:white;" disabled>
							<button type="submit" class="button primary" style="border: 1px solid white;">Inscreva-se</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bottom-top">
						<!-- Copyright -->

						<div class="copyright" style="width:100%;display:flex;justify-content:center;flex-direction:column;">
							<p style="color:#fff;">
								&copy; <?= date('Y'); ?> <span style="color:#fff;font-weight:bold;">DDTIZA-ID</span>. Todos os
								Direitos Reservados
							</p>
							<a target="_blank" href="http://www.3esolucoesti.com.br" style="width:100%;display:flex;justify-content:center;align-items:center;color:#fff;">
								Desenvolvido por: <img src="<?= BASE_URL; ?>/assets/images/TEMPLATE/LogoBrasilComputadoresPNG2.png" border="0" alt="" class="logoRodaper" />
							</a>
						</div>

						<!--/ End Copyright -->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="<?= BASE_URL; ?>/assets/js/jquery-migrate.min.js"></script>
<!-- Popper JS -->
<script src="<?= BASE_URL; ?>/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
<!-- Colors JS -->
<script src="<?= BASE_URL; ?>/assets/js/colors.js"></script>
<!-- Modernizer JS -->
<script src="<?= BASE_URL; ?>/assets/js/modernizr.min.js"></script>
<!-- Nice select JS -->
<script src="<?= BASE_URL; ?>/assets/js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="<?= BASE_URL; ?>/assets/js/tilt.jquery.min.js"></script>
<!-- Fancybox  -->
<script src="<?= BASE_URL; ?>/assets/js/jquery.fancybox.min.js"></script>
<!-- Jquery Nav -->
<script src="<?= BASE_URL; ?>/assets/js/jquery.nav.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= BASE_URL; ?>/assets/js/owl.carousel.min.js"></script>
<!-- Slick Slider JS -->
<script src="<?= BASE_URL; ?>/assets/js/slickslider.min.js"></script>
<!-- Cube Portfolio JS -->
<script src="<?= BASE_URL; ?>/assets/js/cubeportfolio.min.js"></script>
<!-- Slicknav JS -->
<script src="<?= BASE_URL; ?>/assets/js/jquery.slicknav.min.js"></script>
<!-- Jquery Steller JS -->
<script src="<?= BASE_URL; ?>/assets/js/jquery.stellar.min.js"></script>
<!-- Magnific Popup JS -->
<script src="<?= BASE_URL; ?>/assets/js/magnific-popup.min.js"></script>
<!-- Wow JS -->
<script src="<?= BASE_URL; ?>/assets/js/wow.min.js"></script>
<!-- CounterUp JS -->
<script src="<?= BASE_URL; ?>/assets/js/jquery.counterup.min.js"></script>
<!-- Waypoint JS -->
<script src="<?= BASE_URL; ?>/assets/js/waypoints.min.js"></script>
<!-- Jquery Easing JS -->
<script src="<?= BASE_URL; ?>/assets/js/easing.min.js"></script>
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
<script src="<?= BASE_URL; ?>/assets/js/gmap.min.js"></script>
<!-- Main JS -->
<script src="<?= BASE_URL; ?>/assets/js/main.js"></script>


<!--================ conteudo rodape  =================-->
</body>

</html>