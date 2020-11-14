<!DOCTYPE html>
<html>
<head>
	<title>Clube</title>
	<link rel="stylesheet" href="assets/css/style.css?<?= filectime('assets/css/style.css'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/YgCE9d6.png" />
	<meta charset="utf-8">
	<script src="assets/js/default.js?<?= filectime('assets/js/default.js'); ?>"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div id="all">
		<header>
			<div id="center">
				<div class="logo">
					<img src="https://i.imgur.com/YgCE9d6.png" alt="" style="width:73px;margin-top: 21px;float: left;margin-right:7px;filter: drop-shadow(0px 2px 3px #F6FE74);">
					<span>Clube Bons Amigos</span>
				</div>
				<div class="right">
					
					
					

				</div>
				<ul>
					<a href="index.html">
						<li style="margin-left: 0;">
							<img src="assets/img/icon-home.png" alt="">
							<span>Home</span>
						</li>
					</a>
                    <a href="form.html">
						<li>
							<img src="assets/img/icon-1.png" alt="">
							<span>Cadastre-se</span>
						</li>
					</a>
					<a href="cadendereço.php">
						<li>
							<img src="assets/img/icon-endereço.png" alt="">
							<span>Cad Endereço</span>
						</li>
					</a>
					<a href="consulta.php" >
						<li>
							<img src="assets/img/icon-2.png" alt="">
							<span>Consulta Associado</span>
						</li>
					</a>
					<a href="endereco.php" >
						<li>
							<img src="assets/img/icon-3.png" alt="">
							<span>Endereços</span>
						</li>
					</a>
				</ul>
			</div>
		</header>
		
		<div class="bg">
			<div id="center">
				<div class="content">
				<?php
				@$id= $_GET['id'];
				echo"
					<form  action='cadastroend.php' method='POST' name='form1'>
					<input type='hidden' name='id_dados' value='".$id."'>
                        <table border ='1'>
                            <tr align ='center'><td colspan='2'>Cadastro de endereço</td></tr>
                            <tr>
                                <tr><td>Rua:</td>
                                <td><input name='rua'type='text'></td></tr>
                                <td>Número:</td>
                                <td><input name='numero'type='number'></td></tr>
                                <td>Bairro:</td>
                                <td><input name='bairro'type='text'></td></tr>
                                <td>Cidade:</td>
                                <td><input name='cidade'type='text'></td></tr>
                                <td>Estado:</td>
                                <td><input name='estado'type='text'></td></tr>
                                                     
                            </tr>
                            <tr align='center'><td colspan='2'><input type='submit' value='Cadastrar'></td></tr>
            
            
            
            
                        </table>
					</form>
					"
					?>
                    
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/default.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
