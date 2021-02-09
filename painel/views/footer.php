<script>
	$(document).ready(function() {
		//$('.editRodape').modal('show');
	});

	function editRodape(obj) {
		$('.editRodape').modal('show');
	}
</script>


<!-- Modal -->
<div id="editRodape" class="modal fade editRodape" role="dialog" data-backdrop="static" style="position:fixed;">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="background-color: transparent;">
				<button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
				<h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;"><strong>EDITANDO RODAPÉ </strong> <br> [ Endereço / Contatos ] [ Links Redes Sociais ] </h4>
			</div>
			<form class="modal-body" method="POST" action="<?php echo BASE_URL; ?>/painel/pghome/headerfooter">

				<input type="hidden" name="enviourodapeparaeditar" class="enviourodapeparaeditar" value="1" />

				<ul class="nav nav-tabs" style="display:flex;">

					<li class="active show t3R" style="margin-left: 5px;flex: 1;"><a data-toggle="tab" href="#contatoRodape"> CONTATOS </a></li>

					<li style="margin-left: 5px;flex: 1;" class="t2R"><a data-toggle="tab" href="#linkRedeRodapoe"> LINKS REDES SOCIAIS </a></li>

				</ul>


				<div class="tab-content">

					<!-- //// -->
					<div id="contatoRodape" class="tab-pane fade in active show">
						<br>
						<h3>Editar Contatos</h3><br>

						<label><span style="color:red;">*</span> E-mail:</label>
						<input type="text" name="email_rodape01" value="<?php echo $info_home['email01']; ?>" class="form-control titleHomeApre" required="required" style="border:1px solid #ccc !important"><br>

						<label><span style="color:red;">*</span> Telefone:</label>
						<input type="text" name="name_phone" value="<?php echo $info_home['phone01']; ?>" class="form-control titleHomeApre" required="required" style="border:1px solid #ccc !important"><br>

						<label><span style="color:red;">*</span> Celular:</label>
						<input type="text" name="name_cel" value="<?php echo $info_home['cell01']; ?>" class="form-control titleHomeApre" required="required" style="border:1px solid #ccc !important"><br>

						<label><span style="color:red;">*</span> Endereço:</label>
						<textarea name="endereco__rodape" class="form-control endereco--rodape" style="height:120px;border:1px solid #ccc !important"><?php echo $info_home['endereco']; ?></textarea><br>

						<label><span style="color:red;">*</span> Horário de Funcionamento:</label>
						<textarea name="horariofuncionamento" class="form-control horariofuncionamento" style="height:120px;border:1px solid #ccc !important"><?php echo $info_home['horariofuncionamento']; ?></textarea><br>

					</div>

					<!-- //// -->
					<div id="linkRedeRodapoe" class="tab-pane fade">
						<br>
						<h3>Editar Links Redes Sociais</h3><br>

						<label>Link Facebook:</label>
						<input type="text" name="link_01" value="<?php echo $info_home['linkrede01']; ?>" class="form-control titleHomeApre" style="border:1px solid #ccc !important"><br>

						<label>Link Linkedin :</label>
						<input type="text" name="link_02" value="<?php echo $info_home['linkrede02']; ?>" class="form-control titleHomeApre" style="border:1px solid #ccc !important"><br>

						<label>Link Instagram:</label>
						<input type="text" name="link_03" value="<?php echo $info_home['linkrede03']; ?>" class="form-control titleHomeApre" style="border:1px solid #ccc !important"><br>


					</div>


				</div>

				<input type="hidden" name="pgURL" value="<?php $url = $_GET['url'];
																									echo $url; ?>">

				<div class="modal-footer">
					<input type="submit" value="ATUALIZAR" class="btn btn-primary">
					<button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
				</div>

			</form>

		</div>

	</div>
</div>


<div class="barraEditarHome" style="margin-bottom: 0px;">
	<a href="javascript:void(0);" class="btnEditGeral" onClick="editRodape(this)"> Editar Rodapé <i class="fa fa-cogs"></i></a>
</div>


<!--================ conteudo rodape  =================-->
</div>


<!-- Footer -->
<footer id="footer" class="footer wow fadeIn" style="background:#ff6f12;">
	<!-- Top Arrow -->
	<div class="top-arrow">
		<a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
	</div>
	<!--/ End Top Arrow -->
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">


				<div class="col-lg-3 col-md-6 col-12">
					<h2 style="margin-right: 20px;visibility: hidden;">Localização e Contato</h2>
					<a href="<?php echo BASE_URL; ?>/"><img src="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/logo.png" alt="logo" /></a>
				</div>

				<div class="col-lg-4 col-md-6 col-12">
					<!-- About Widget -->
					<div class="single-widget about">
						<h2>Localização e Contato</h2>
						<ul class="list">
							<li style="color:white;"><i style="color:white;" class="fa fa-map-marker"></i>Endereço: Rua Santana, Nº 492 Bairro: Penha, ITABIRA-MG</li>
							<li style="color:white;"><i style="color:white;" class="fa fa-phone"></i>Telefone: (031) 3831-1220</li>
							<li style="color:white;"><i style="color:white;" class="fa fa-whatsapp"></i>Celular: (031) 98838-9798</li>
							<li style="color:white;"><i style="color:white;" class="fa fa-envelope-o"></i>Email:<a href="mailto:contato@ddtizeid.com.br" style="color:white;">contato@ddtizeid.com.br</a></li>
						</ul>
					</div>
					<!--/ End About Widget -->
				</div>

				<div class="col-lg-2 col-md-6 col-12">
					<!-- Links Widget -->
					<div class="single-widget links">
						<h2>Links Úteis</h2>
						<ul class="list">
							<li style="color:white;"><a href="<?php echo BASE_URL; ?>/" style="color:white;"><i class="fa fa-caret-right" style="color:white;"></i>Área Restrita</a></li>
							<li style="color:white;"><a href="<?php echo LINKWEBMAIL; ?>" target="_blank" style="color:white;"><i class="fa fa-caret-right" style="color:white;"></i>WebMail</a></li>
							<li>
								<a href="" target="_blank" style="font-size: 20px;margin-right:20px;color:white;"><i class="fa fa-facebook"></i></a>
								<a href="" target="_blank" style="font-size: 20px;color:white;"><i class="fa fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<!--/ End Links Widget -->
				</div>


				<div class="col-lg-3 col-md-6 col-12">
					<!-- Newsletter Widget -->
					<div class="single-widget newsletter">
						<h2 style="color:white;">Newsletter</h2>
						<p style="color:white;">Cadastre-se e fique por dentro das nossas novidades.</p>
						<form action="" method="POST" class="formrodape">
							<input placeholder="Seu E-mail" type="email" style="color:white;">
							<button type="submit" class="button primary" style="border: 1px solid white;">Inscreva-se</button>
						</form>
					</div>
					<!--/ End Newsletter Widget -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bottom-top">
						<!-- Social -->
						<!-- <ul class="social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											</ul> -->
						<!--/ End Social -->
						<!-- Copyright -->
						<center>
							<div class="copyright" style="width:100%;display:flex;justify-content:center;flex-direction:column;">
								<p style="color:#fff;">
									&copy; <?php echo date('Y'); ?> <span style="color:#fff;font-weight:bold;">DDTIZA-ID</span>. Todos os Direitos Reservados
								</p>
								<a target="_blank" href="http://www.3esolucoesti.com.br" style="width:100%;display:flex;justify-content:center;align-items:center;color:#fff;">
									Desenvolvido por: <img src="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/LogoBrasilComputadoresPNG2.png" border="0" alt="" class="logoRodaper" />
								</a>
							</div>
						</center>
						<!--/ End Copyright -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Bottom -->
</footer>
<!--/ End footer -->


<script src="<?php echo BASE_URL; ?>/assets/js/jquery-migrate.min.js"></script>
<!-- Popper JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
<!-- Colors JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/colors.js"></script>
<!-- Modernizer JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/modernizr.min.js"></script>
<!-- Nice select JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/tilt.jquery.min.js"></script>
<!-- Fancybox  -->
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.fancybox.min.js"></script>
<!-- Jquery Nav -->
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.nav.js"></script>
<!-- Owl Carousel JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/owl.carousel.min.js"></script>
<!-- Slick Slider JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/slickslider.min.js"></script>
<!-- Cube Portfolio JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/cubeportfolio.min.js"></script>
<!-- Slicknav JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.slicknav.min.js"></script>
<!-- Jquery Steller JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.stellar.min.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/magnific-popup.min.js"></script>
<!-- Wow JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/wow.min.js"></script>
<!-- CounterUp JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.counterup.min.js"></script>
<!-- Waypoint JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/waypoints.min.js"></script>
<!-- Jquery Easing JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/easing.min.js"></script>
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/gmap.min.js"></script>
<!-- Main JS -->
<script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>


<!--================ conteudo rodape  =================-->


</body>

</html>