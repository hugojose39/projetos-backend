<?php



$nome=$_POST['nome'];

$idade=$_POST['idade'];

$email=$_POST['email'];

$salario=$_POST['salario'];

$filho=$_POST['filho'];

$endereco=$_POST['endereco'];

$numero=$_POST['numero'];

$bairro=$_POST['bairro'];

$cidade=$_POST['cidade'];

$estado=$_POST['estado'];

$calculo= (300*$filho)+$salario; 

echo "Seu nome é ".$nome." e sua idade é ".$idade." anos. <br>
Seu e-mail é ".$email.".<br>
Residente na rua ".$endereco." ,número ".$numero." ,localizado no bairro ".$bairro.", da cidade de ".$cidade.", do estado de ".$estado.".<br>" 
.$nome. 
" recebe um salário de R$" .$salario." reais, possui " .$filho." filho(s). <br>
Ele recebe uma contribuição por filho de R$300 reais, 
que somados aos salário dele dá R$" .$calculo." reais.";" 
"
?>
