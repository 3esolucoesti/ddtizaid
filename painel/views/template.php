<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Criação de sites, sites, divulgação"> 
    <meta name="robots" content="index, follow">
    <meta name="author" content="Ricardo Alves-Programador">
    <meta name="author" content="Diego Reis-Desing">
    <title>PAINEL - <?= NOME_SITE; ?></title> 
    <!-- Por icon Do site REVENDA SITE -->
    <link rel="icon" href="<?= BASE_URL; ?>/painel/assets/images/TEMPLATE/<?= ICON; ?>">

    <link rel="stylesheet" href="<?= BASE_URL; ?>/painel/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= BASE_URL; ?>/painel/assets/css/croppie.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>/painel/assets/css/sweetalert.css"/>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/painel/assets/css/style.css"/>
    
    <link rel="stylesheet" href="<?= BASE_URL; ?>/painel/assets/css/bootstrap.min.css" />

    <script src="<?= BASE_URL; ?>/painel/assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?= BASE_URL; ?>/painel/assets/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL; ?>/painel/assets/js/croppie.js"></script>
    <script src="<?= BASE_URL; ?>/painel/assets/js/sweetalert.min.js"></script>
    <script src="<?= BASE_URL; ?>/painel/assets/js/script.js"></script>
    <script src="<?= BASE_URL; ?>/painel/assets/js/exif.js"></script>
    <script src="<?= BASE_URL; ?>/ckeditor/ckeditor.js"></script>
    
    <script src="<?= BASE_URL; ?>/painel/assets/js/jquery.mask.min.js"></script>

    <script>
        function exitLoja() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
            window.location.href = `<?php echo BASE_URL; ?>/login`;
        }
    </script>

    <style type="text/css">
        body{}
        .container-fluid{margin: 0px;padding: 0px;}
        .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;margin-left: -230px;}
        /*::-webkit-scrollbar{width: 0px;}*/
        .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
        .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;margin-left: -230px;}
        .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
        .barraInit .logoEmpresa img{height: 100%;}
        .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
        .barraInit .btn_Small{height: 50px;background: transparent;width: 40px;text-align: center;padding-top: 12px;}
        .barraInit .btn_Small i{color: white;font-size: 2em;}
        .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
        .barraInit .btn_smallMenu{cursor: pointer;} 

        /* MENU SMALL */
        .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

        .conteudoInfo{display: flex;margin-top: 50px;}

        .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
        .imgMini img{width: 100%;height: 100%;}

        .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
        .namePersonLogada strong{}

        .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
        .personLogada i{color: green;font-size: 1.3em;}

        .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

        .listNavBar{background: <?php echo COR_HOLVER; ?>;}
        .listNavBar ul{list-style: none;padding-left: 0px;}
        .listNavBar ul li{background: transparent;}
        .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
        .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
        .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
        .listNavBar ul li a i{}

        .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
        .listNavBar ul li ul li{padding-left: 15px;} 
        .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
        .fa-circle-o{font-size: 0.7em;}

        .areaNotificacoes{position: absolute; right: 50px; width: 150px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
        .areaNotificacoes a{margin-right: 5px;}
        .areaNotificacoes a i{color: white;}
        .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
        .areaNotificacoes a .badge2{background: green;}
    
        .areaPerfil{position: absolute; right: 0px;  width: 50px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
        .imgPerfilName{display: flex;cursor: pointer;}
        .areaPerfil{flex: 1;cursor: pointer;}
        .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
        .namePerf{line-height: 50px;color: white;cursor: pointer;display: none;}
        .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
        .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
        .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
        .membroDesde{text-align: center;font-size: 1em;color: white;}
        .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
        .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
        .listaBtnPerfil .trocaUser{margin-left: 10px;}
        .listaBtnPerfil .btnSair{margin-left: 10px;}

        .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 10px;margin-top: 50px;padding-top: 50px;}


        @media all and (min-width: 480px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;margin-left: -230px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;margin-left: -230px;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 50px; width: 150px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 50px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;display: none;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 10px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 640px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;margin-left: -230px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;margin-left: -230px;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;display: block;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 10px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 768px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;margin-left: 0px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;margin-left: 0px;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 800px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 960px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1024px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1280px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1366px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1680px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 1920px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?php echo COR_BASE; ?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?php echo COR_BASE; ?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?php echo COR_HOLVER; ?>;}
            .barraInit .logoEmpresa {height: 40px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?php echo COR_HOLVER; ?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?php echo COR_BASE; ?>;-webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?php echo COR_HOLVER; ?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?php echo COR_HOLVER; ?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?php echo COR_MARCACAO; ?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?php echo COR_HOLVER; ?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?php echo COR_HOLVER; ?>;}
            .fa-circle-o{font-size: 0.7em;}


            .listNavBar ul li ul li ul{display: none;}

            .areaNotificacoes{position: absolute; right: 180px; width: 180px;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?php echo COR_HOLVER; ?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?php echo COR_BASE; ?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height: 1000px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        .formTrocarUser{}
        .formTrocarUser label{margin-top: 10px;}
        .fotoPessoaAtual{width: 100px;height: 100px;border-radius: 100%;background: red;border:2px solid <?php echo COR_HOLVER; ?>;margin:auto;}
        .avisoTrocaUser{display: none;}

        .barraInit .logoEmpresa{
            margin-top: 2px;
        }

        .imgPerf img{width: 100%;height: 100%;}
        .imgPerfEdit img{width: 100%;height: 100%;}
        .imgMini img{width: 100%;height: 100%;}
        .fotoPessoaAtual img{width: 100%;height: 100%;}

        th{background: #e9e9e9;}
        .btn-default{background: #1F3F77;border:1px solid #1F3F77;color: white;padding: 11px;}
        .btn-default:hover{background: rgba(25,25,112,1);border:1px solid #1F3F77;color: white;}
        td{ }
        tr{font-size: 12px;}

        th{background: #e9e9e9;} /* 40428d */
        td{background: #FBFBFB;} /* 292a69 */

        .btn-primary{
            background:<?php echo COR_HOLVER; ?> !important;
            border: 1px solid <?php echo COR_HOLVER; ?> !important;
        }

        .btn-primary:hover{
            background:<?php echo COR_BASE; ?> !important;
            border: 1px solid <?php echo COR_HOLVER; ?> !important;
        } 
    </style>

    <script type="text/javascript">
        $(window).on('scroll', function(){
            var scroll = $(window).scrollTop();
            // o valor 400 é a altura do scroll para iniciar o efeito
            if (scroll > 200) {
                $('.miniLogo').addClass('efeito');
            }else{
                $('.miniLogo').removeClass('efeito');
            }
        });

        $(function(){
            $('.areaPerfil').on('click', function(){
                $('.areaPerfilConteiner').slideToggle();
            });

            $('.btn_smallMenu').on('click', function(){
                var tamanho = $(window).width(); 

            if(tamanho < 768){
                if($('.areaMenus').hasClass('menu_small1') == true){    
                    $('.areaMenus').removeClass('menu_small1');
                    $('.barraInit .areaLogo').css('margin-left','-230px');
                    $('.areaMenus').css('margin-left','-230px');

                    $('.barraInit .areaLogo').css('-webkit-transition','all 0.5s ease');
                    $('.barraInit .areaLogo').css('-moz-transition','all 0.5s ease');
                    $('.barraInit .areaLogo').css('-o-transition','all 0.5s ease');
                    $('.barraInit .areaLogo').css(' transition','all 0.5s ease');

                    $('.areaMenus').css('-webkit-transition','all 0.5s ease');
                    $('.areaMenus').css('-moz-transition','all 0.5s ease');
                    $('.areaMenus').css('-o-transition','all 0.5s ease');
                    $('.areaMenus').css(' transition','all 0.5s ease');

                    if(tamanho < 480){
                        $('.areaNotificacoes').css('display','block');
                        $('.areaNotificacoes').css('display','flex');
                    }   
                }else{
                    $('.areaMenus').addClass('menu_small1');
                    $('.barraInit .areaLogo').css('margin-left','0px');
                    $('.areaMenus').css('margin-left','0px');

                    $('.barraInit .areaLogo').css('-webkit-transition','all 0.5s ease');
                    $('.barraInit .areaLogo').css('-moz-transition','all 0.5s ease');
                    $('.barraInit .areaLogo').css('-o-transition','all 0.5s ease');
                    $('.barraInit .areaLogo').css(' transition','all 0.5s ease');

                    $('.areaMenus').css('-webkit-transition','all 0.5s ease');
                    $('.areaMenus').css('-moz-transition','all 0.5s ease');
                    $('.areaMenus').css('-o-transition','all 0.5s ease');
                    $('.areaMenus').css(' transition','all 0.5s ease');

                    if(tamanho < 480){
                        $('.areaNotificacoes').css('display','none');
                    }   
                }
            } else{
                if($('.areaMenus').hasClass('menu_small') == true){
                    $('.containerr').css('padding-left','240px');
                    $('.areaMenus').removeClass('menu_small');
                    $('.areaLogo').css('width','230px');
                    $('.areaLogo,.areaMenus').css('-webkit-transition','all 0.5s ease');
                    $('.areaLogo,.areaMenus').css('-moz-transition','all 0.5s ease');
                    $('.areaLogo,.areaMenus').css('-o-transition','all 0.5s ease');
                    $('.areaLogo,.areaMenus').css(' transition','all 0.5s ease');

                    $('.namePersonLogada').css('display','block');
                    $('.personLogada').css('display','block');

                    //aparecento escrita
                    $('.listNavBar ul li span').css('display','block');
                    $('.barratitle span').css('display','block');
                    $('.listNavBar ul li a .menuCicle').css('margin-right','5px');
                    $('.listNavBar ul li a .menuCicle').css('float','left');
                    $('.listNavBar ul li ul li a .setaParaBaixo').css('margin-right','5px');
                    $('.listNavBar ul li ul li a .setaParaBaixo').css('float','right');

                    //MENU SUB INDICADORES
                    $('.listNavBar ul li ul li .setaParaBaixo').removeClass('fa-caret-right');
                    $('.listNavBar ul li ul li .setaParaBaixo').addClass('fa-caret-down');
                    

                    $('.listNavBar ul li a span').css('margin-top','-3px');
                    $('.listNavBar ul li a span').css('float','left');
                    $('.listNavBar ul li .setaMenu').css('float','right');

                    $('.setaMenu').removeClass('fa-caret-right');
                    $('.setaMenu').addClass('fa-caret-down');
                    $('.fa-caret-down').css('margin-top','-0px');

                    $('.listNavBar ul li').css('clear','both');
                    $('.listNavBar ul li a').css('padding-top','13px');
                    $('.listNavBar ul li a').css('padding-bottom','28px');
                    $('.nameEmpresa').css('display','block');

                    //Css sub menu
                    $('.listNavBar ul li ul').css('background','<?php echo COR_HOLVER; ?>');
                    $('.listNavBar ul li ul').css('display','none');
                    $('.listNavBar ul li ul').css('position','static');
                    $('.listNavBar ul li ul').css('left','0px');
                    $('.listNavBar ul li ul').css('margin-top','-0px');
                    $('.listNavBar ul li ul').css('width','100%');
                    $('.listNavBar ul li ul li').css('padding-left','15px');
                    $('.listNavBar ul li ul li a').css('border-bottom','1px solid <?php echo COR_HOLVER; ?>');
                    $('.listNavBar ul li ul li a').css('padding','10px');
                    $('.listNavBar ul li ul li a span').css('margin-top','-4px');
                    $('.listNavBar ul li ul li a i').css('margin-top','6px');
                    $('.fa-circle-o').css('font-size','0.7em');
                    $('.listNavBar ul li ul li ul').css('display','block');
                    $('.listNavBar ul li ul ').slideUp();
                }else{
                    $('.containerr').css('padding-left','60px');
                    $('.areaMenus').addClass('menu_small');
                    $('.areaLogo').css('width','50px');
                    $('.areaLogo,.areaMenus').css('-webkit-transition','all 0.5s ease');
                    $('.areaLogo,.areaMenus').css('-moz-transition','all 0.5s ease');
                    $('.areaLogo,.areaMenus').css('-o-transition','all 0.5s ease');
                    $('.areaLogo,.areaMenus').css(' transition','all 0.5s ease');

                    $('.namePersonLogada').css('display','none');
                    $('.personLogada').css('display','none');
                    $('.nameEmpresa').css('display','none');

                    //deixando somente icone
                    $('.listNavBar ul li span').css('display','none');
                    $('.barratitle span').css('display','none');
                    $('.setaMenu').removeClass('fa-caret-down');
                    $('.setaMenu').addClass('fa-caret-right');
                    $('.fa-caret-right').css('margin-top','0px');
                    $('.fa-caret-right').css('margin-left','5px');

                    //Css Sub Menu
                    $('.listNavBar ul li ul').css('background','<?php echo COR_HOLVER; ?>');
                    $('.listNavBar ul li ul').css('display','none');
                    $('.listNavBar ul li ul').css('position','absolute');
                    $('.listNavBar ul li ul').css('left','50px');
                    $('.listNavBar ul li ul').css('margin-top','-41px');
                    $('.listNavBar ul li ul').css('width','200px');
                    $('.listNavBar ul li ul li').css('padding-left','0px');
                    $('.listNavBar ul li ul li a').css('border-bottom','1px solid <?php echo COR_HOLVER; ?>');
                    $('.fa-circle-o').css('font-size','0.7em');

                    //Css Sub Menu SUB HOVER
                    $('.listNavBar ul li ul li ul').css('background','<?php echo COR_HOLVER; ?>');
                    $('.listNavBar ul li ul li ul').css('display','none');
                    $('.listNavBar ul li ul li ul').css('position','absolute');
                    $('.listNavBar ul li ul li ul').css('left','200px');
                    $('.listNavBar ul li ul li ul').css('margin-top','-41px');
                    $('.listNavBar ul li ul li ul').css('width','200px');
                    $('.listNavBar ul li ul li ul').css('padding-left','0px');
                    $('.listNavBar ul li ul li ul a').css('border-bottom','1px solid <?php echo COR_HOLVER; ?>');
                    $('.fa-circle-o').css('font-size','0.7em');

                    // .listNavBar ul li ul li ul li   //MENU SUB INDICADORES
                    $('.listNavBar ul li ul li .setaParaBaixo').removeClass('fa-caret-down');
                    $('.listNavBar ul li ul li .setaParaBaixo').addClass('fa-caret-right');
                    $('.listNavBar ul li ul li .setaParaBaixo').css('float','right');
                    $('.listNavBar ul li ul li .setaParaBaixo').css('margin-top','3px');
                    $('.listNavBar ul li ul ').slideUp();
                }       
            }
            });    

            $('.trocarUser').on('click',function(){
                $('.areaPerfilConteiner').slideUp();
            });
                    

            // LISTA DE SUB MENUS 
            $('.openSubMenu1').on('click', function(){
                $('.listNavBar ul li .m1').slideToggle();

                //Fechando Menus
                $('.listNavBar ul li .m2').slideUp();   
                $('.listNavBar ul li .m3').slideUp();   
                $('.listNavBar ul li .m4').slideUp();   
                $('.listNavBar ul li .m5').slideUp();   
                $('.listNavBar ul li .m6').slideUp();   
                $('.listNavBar ul li .m7').slideUp();   
                $('.listNavBar ul li .m8').slideUp();   
                $('.listNavBar ul li .m9').slideUp();   
                $('.listNavBar ul li .m10').slideUp();  
                $('.listNavBar ul li .m11').slideUp();  
                $('.listNavBar ul li .m12').slideUp();  
                $('.listNavBar ul li .m13').slideUp();  
                $('.listNavBar ul li .m14').slideUp();  

            });

                $('.openSubMenu2').on('click', function(){
                    $('.listNavBar ul li .m2').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu3').on('click', function(){
                    $('.listNavBar ul li .m3').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu4').on('click', function(){
                    $('.listNavBar ul li .m4').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu5').on('click', function(){
                    $('.listNavBar ul li .m5').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu6').on('click', function(){
                    $('.listNavBar ul li .m6').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu7').on('click', function(){
                    $('.listNavBar ul li .m7').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu8').on('click', function(){
                    $('.listNavBar ul li .m8').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu9').on('click', function(){
                    $('.listNavBar ul li .m9').slideToggle();   

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu10').on('click', function(){
                    $('.listNavBar ul li .m10').slideToggle();  

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu11').on('click', function(){
                    $('.listNavBar ul li .m11').slideToggle();  

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu12').on('click', function(){
                    $('.listNavBar ul li .m12').slideToggle();  

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu13').on('click', function(){
                    $('.listNavBar ul li .m13').slideToggle();  

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m14').slideUp();  

                });

                $('.openSubMenu14').on('click', function(){
                    $('.listNavBar ul li .m14').slideToggle();  

                    //Fechando Menus
                    $('.listNavBar ul li .m1').slideUp();
                    $('.listNavBar ul li .m2').slideUp();   
                    $('.listNavBar ul li .m3').slideUp();   
                    $('.listNavBar ul li .m4').slideUp();   
                    $('.listNavBar ul li .m5').slideUp();   
                    $('.listNavBar ul li .m6').slideUp();   
                    $('.listNavBar ul li .m7').slideUp();   
                    $('.listNavBar ul li .m8').slideUp();   
                    $('.listNavBar ul li .m9').slideUp();   
                    $('.listNavBar ul li .m10').slideUp();  
                    $('.listNavBar ul li .m11').slideUp();  
                    $('.listNavBar ul li .m12').slideUp();  
                    $('.listNavBar ul li .m13').slideUp();  

                });


                $('.subMenuHover1').on('click', function(){
                    $('.listNavBar ul li ul li .subMenuHoverUL1').slideToggle();
                    $('.listNavBar ul li ul li .subMenuHoverUL2').slideUp();


                });

                $('.subMenuHover2').on('click', function(){
                    $('.listNavBar ul li ul li .subMenuHoverUL2').slideToggle();
                    $('.listNavBar ul li ul li .subMenuHoverUL1').slideUp();

                });

        });

        function areaconfigt(){
            $('.areamenudrop').slideToggle('show');
        }  
    
    </script> 

    <!-- TROCAR DE USUARIO  -->
    <script type="text/javascript">
        $(function(){
            $('.btn_trocarUser').on('click', function(){

                var email = $('input[name=email]').val();
                var password = $('input[name=password]').val();

                $.ajax({
                    url:'<?php echo BASE_URL; ?>/painel/login/trocar_user',
                    type:'POST',
                    dataType:'json',
                    data:{email:email,password:password},
                    success:function(json){

                        if(json == 1){
                            $('.avisoTrocaUser').slideDown();

                            $('.avisoTrocaUser').html( 'ESTE USUÁRIO ESTA BLOQUEADO! ENTRE EM CONTATO COM SUPORTE: <a href="mailto:<?php echo EMAIL_; ?>"><?php echo EMAIL_; ?></a> ou <a href="tel:<?php echo TELEFONE_SUPORTE; ?>"><?php echo TELEFONE_SUPORTE; ?></a>' );
                        }
                        if(json == 2){
                            $('.avisoTrocaUser').slideDown();

                            $('.avisoTrocaUser').html( 'Acesso Negado! E-mail e/ou senha errados' );
                        }
                        if(json == 3){
                            $('.avisoTrocaUser').slideDown();

                            $('.avisoTrocaUser').html( ' ESSE E-MAIL NÃO EXISTE! ' );
                        }

                        if(json == 4){
                            window.location.href="<?php echo BASE_URL; ?>/painel";
                        }

                    },
                    error:function(){
                        console.log('Algum ERROR!');
                    }
                });

            });

        $('.emailNewLogin').on('focus', function(){
            $('.avisoTrocaUser').slideUp();
        }); 

        $('.passwordNewLogin').on('focus', function(){
            $('.avisoTrocaUser').slideUp();
        }); 

        });
    </script>

</head>

<body>
    <div class="container-fluid">
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
                            <h4 style="color: black;">
                                VOCÊ NÃO TEM PERMISSÃO PARA <strong style="color: blue;font-weight: bold;text-decoration: underline;">ALTERAR</strong> e/ou <strong style="color: blue;font-weight: bold;text-decoration: underline;">EXCLUIR</strong> e/ou <strong style="color: blue;font-weight: bold;text-decoration: underline;"> ENTRAR</strong> NESSA AREA!
                            </h4>
                        </center> 
                    </div>
                    
                    <div class="modal-footer">
                        <a href="<?php echo BASE_URL; ?>/painel" type="button" class="btn btn-default">SAIR</a>
                    </div>
                </div>
            </div>
        </div> 

        <div class="barraInit">
            <div class="areaLogo">
                <div class="logoEmpresa">
                    <a href="<?php echo BASE_URL; ?>/painel"><img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/<?php echo $viewData['company_logo']; ?>" border="0" alt="" /></a>
                </div>
                <div class="nameEmpresa">
                    <?php echo $viewData['company_name']; ?>
                </div>
            </div>
            <div class="btn_Small">
                <a  class="btn_smallMenu"><i class="fa fa-list"></i></a>
            </div>

            <div class="areaNotificacoes">
                <?php if(!empty($menuUsuarios) || !empty($menuPermissoes) ): ?>
                    <div class="dropdown">
                        <button  type="button" class="btn btn-primary " onClick="areaconfigt()"  style="font-size: 20px;margin-top: 9px;margin-right: 20px;"  ><i class="fa fa-cog"></i>
                        </button>
                        <ul class="dropdown-menu areamenudrop">
                            <?php if(!empty($menuUsuarios)): ?> 
                                <li><a href="<?php echo BASE_URL; ?>/painel/users">USUÁRIOS</a></li>
                            <?php endif; ?>
                            <?php if(!empty($menuPermissoes)): ?>
                                <li><a href="<?php echo BASE_URL; ?>/painel/permissions">PERMISSÕES</a></li>
                            <?php endif; ?>
                        </ul>
                    </div> 
                <?php endif; ?>

                <a href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_msg"><i class="fa fa-envelope-o"></i> <span class="badge badge1"><?php echo $msg; ?></span></a><br>
                <a href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_leads"><i class="fa fa-bell"></i> <span class="badge badge2"><?php echo $newsleder; ?></span></a><br>
            </div>

            <div class="areaPerfil">
                <div class="imgPerfilName">
                    <div class="imgPerf">
                        <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                        <?php else: ?>  
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                        <?php endif; ?>         
                    </div>
                    <div class="namePerf">
                        <label style="cursor: pointer;">
                                <?php 
                                $name = explode(' ', $viewData['user_name']); 
                                if(!empty($name[1][1])){
                                    echo $name[0]." ".$name[1][0].".";
                                }else{
                                    echo $name[0];
                                }
                            ?>    
                        </label>  
                        <i class="fa fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <div class="areaPerfilConteiner">
                <div class="imgPerfEdit">
                    <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                    <?php else: ?>  
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                    <?php endif; ?>     
                </div>
                
                <hr>
                
                <div class="nameFuncao">
                    <?php 
                        $name = explode(' ', $viewData['user_name']); 
                        if(!empty($name[1][0])){
                            echo $name[0]." ".$name[1].".";
                        }else{
                            echo $name[0];
                        }
                    ?>  
                </div>
                <div class="membroDesde">
                    <?php echo $viewData['sector']; ?>  
                </div>
                <div class="listaBtnPerfil">
                    <div class="btn_Perfil">
                        <a href="<?php echo BASE_URL; ?>/painel/users/profile" class="btn btn-primary">Perfil</a>
                    </div>
                    <div class="trocaUser">
                        <a  class="btn btn-primary trocarUser" style="cursor: pointer;" data-toggle="modal" data-target="#trocarUser" >Trocar de Conta</a> <!-- href="<?php echo BASE_URL; ?>/login/trocar_user" -->
                    </div>
                    <div class="btnSair">
                        <a href="<?php echo BASE_URL; ?>/painel/home/logout" onClick="exitLoja()"  class="btn btn-primary">Sair</a>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Modal Trocar User -->
        <div id="trocarUser" class="modal fade" role="dialog" style="position: fixed;" data-backdrop="static">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">ACESSE OUTRA CONTA</h4></center>
                </div>
                <div class="modal-body">
                <form method="POST" class="formTrocarUser">
                    <div class="fotoPessoaAtual">
                        <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                        <?php else: ?>  
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                        <?php endif; ?>     
                    </div>  
                    <br>
                    <div class="alert alert-danger avisoTrocaUser">
                    </div>

                    <div class="campos">
                        <label>E-MAIL</label>
                        <input type="email" name="email" class="form-control emailNewLogin" required="required"  placeholder="E-mail" > 

                        <label>SENHA</label>
                        <input type="password" name="password" class="form-control passwordNewLogin" required="required" placeholder="Senha" ><br>  

                        <input type="button"  class="btn btn-primary btn_trocarUser" value="Trocar de Usuário">

                    </div>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">SAIR</button>
                </div>
            </div>

            </div>
        </div>

        <div class="areaMenus">
            <div class="conteudoInfo">
                <div class="imgMini">
                    <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                    <?php else: ?>  
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                    <?php endif; ?>         
                </div>
                <div class="namePersonLogada">
                    <strong><?php 
                        $name = explode(' ', $viewData['user_name']); 
                        if(!empty($name[1][0])){
                            echo $name[0]." ".$name[1].".";
                        }else{
                            echo $name[0];
                        }
                    ?></strong>
                </div>
            </div>  

            <div class="personLogada">
                <i class="fa fa-circle"></i> Online
            </div>
            
            <div class="barratitle">
                <span>Menus de Navegação</span>
            </div>
            
            <div class="listNavBar"> 
                <ul>
                    <li class="l1">
                        <a href="<?= BASE_URL; ?>/painel">
                            <i class="fa fa-home menuCicle"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a style="cursor: pointer;" class="openSubMenu3">
                            <i class="fa fa-list-alt menuCicle"></i>
                            <span>PÁGINAS DO SITE</span>
                            <i class="setaMenu fa fa-caret-down "></i>
                        </a>
                        
                        <ul class="m3">
                            <li><a href="<?= BASE_URL; ?>/painel/pghome"><i class="fa fa-circle-o menuCicle"></i> HOME</a></li>
                            <li><a href="<?= BASE_URL; ?>/painel/pgabout"><i class="fa fa-circle-o menuCicle"></i> SOBRE</a></li>
                            <li><a href="<?= BASE_URL; ?>/painel/pgservices"><i class="fa fa-circle-o menuCicle"></i> SERVIÇOS</a></li>
                            <li><a href="<?= BASE_URL; ?>/painel/pginsetos"><i class="fa fa-circle-o menuCicle"></i> INSETOS</a></li>
                            
                            <li><a href="<?= BASE_URL; ?>/painel/pgphotos"><i class="fa fa-circle-o menuCicle"></i> GALERIA DE FOTOS</a></li>
                            <li><a href="<?= BASE_URL; ?>/painel/pgcontact"><i class="fa fa-circle-o menuCicle"></i> CONTATO</a></li>
                            <li><a href="<?= BASE_URL; ?>/painel/pgcontact"><i class="fa fa-circle-o menuCicle"></i> ORÇAMENTO</a></li>
                        </ul>
                    </li>

                    <li data-toggle="tooltip" title="VOLTAR PARA O SITE" data-placement="right" style="background-color: red;" >
                        <a href="<?php echo BASE_URL; ?>/">
                            <i class="fa fa-arrow-left menuCicle"> VOLTAR PARA O SITE</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Load Template -->
        <div class="containerr">
            <?php $this->loadInTemplate($viewName, $viewData); ?>
        </div> 
    </div>
</body>
</html>