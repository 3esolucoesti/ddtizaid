<?php require_once('views/headerLogin.php'); ?>

   <style type="text/css">
		.loginarea{width:300px;background:#000;position:absolute;left:50%;top:200px;margin-left:-150px;border-radius:5px;box-shadow:0px 0px 10px #999;border:1px solid #ccc;}
		.form{background:#000;padding:10px;color: #fff;}
		.form label{background:#000;}
		.logo{width: 80%;margin: auto;padding: 10px;margin-top: 30px;}
		.logo img{width:100%;}
		.esqueciminhasenha{float: right;margin-top: 8px;color: white;}
		.esqueciminhasenha:hover{color: red;}
		.aviso{display: none;}
	</style>


	<script type="text/javascript">
		$(function(){

			$('.conferir').submit(function(e){
				var pass1 = $('input[name=password1]').val();
				var pass2 = $('input[name=password2]').val();

				if(pass1 == pass2){

				}else{
					e.preventDefault();
					$('input[name=password2]').css('border','1px solid red');
					$('.aviso').css('display','block');
				}

			});

		});	
	</script>
    
<div class="container-fluid">
	<div class="loginarea">
    	<div class="logo">
			<img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/logosite2.png" border="0" alt="" />
        </div>
        <?php if(!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if(!empty($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
						<script type="text/javascript" >
              $(function() {
                setTimeout(function(){ 
                  window.location.href = "<?php echo BASE_URL; ?>/painel";
                }, 3000);
              });
          </script>
        <?php endif; ?>
    	<form method="post" class="form conferir" >
        	<label for="password">Digite sua nova senha</label>
        	<input type="password" name="password1" autofocus="autofocus" placeholder="Nova Senha" id="password" class="form-control" required="required"><br/>

        	<p style="color: red;" class="aviso">Senha 1 não Bate com Senha 2!</p>
        	<label for="password">Confirme sua nova senha</label>
        	<input type="password" name="password2" autofocus="autofocus" placeholder="Confirmação da Nova Senha" id="password" class="form-control" required="required"><br/>
            <input type="submit" value="Confirmar" class="btn btn-default">
        </form>
    </div>
</div>

</body>
</html>




























