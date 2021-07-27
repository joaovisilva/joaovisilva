<?php
	echo ("Bem vindo a pagina <br>");
	echo ("Insira a baixo os seus dados pessoais: <br><br>");

	$nome = "Jose Basilio de Alvarenga";
	$data_nascimento = "10/08/1981";
	$idade = 39;
	$sexo = "M";
	$altura = 1.65;
	$telefone = "4444-5968";
	$celular = "98765-4123";
	$rg = "12.123.654-1";


	echo ('<b>Nome:</b><font color"#0000AA">' .$nome.'</font><br>');
	echo ('<b>Data de nascimento:</b><font color"#0000AA">' .$data_nascimento.'</font><br>');
	echo ('<b>Idade:</b><font color"#0000AA">'.$idade.'</font><br>');
	echo ('<b>Sexo:</b><font color"#0000AA">'.$sexo.'</font><br>');
	echo ('<b>Altura:</b><font color"#0000AA">'.$altura.'</font><br>');
	echo ('<b>Telefone:</b><font color"#0000AA">'.$telefone.'</font><br>');
	echo ('<b>Celular:</b><font color"#0000AA">'.$celular.'</font><br>');
	echo ('<b>Rg:</b><font color"#0000AA">'.$rg.'</font><br><br>');

	echo ("Insira a baixo os dados da empresa: <br><br>");

	$nome = "JVS store";
	$cnpj = 113325468520.15;
	$endereço = "rua: Gumercindo da Costa, numero: 320";
	$email = "JVSstore@gmail.com.br";
	$telefone = "4444-5900";
	$whatsapp = "98746-5320";

	echo ('<b>Nome:</b><font color"#0000AA">' .$nome.'</font><br>');
	echo ('<b>Cnpj:</b><font color"#0000AA">'.$cnpj.'</font><br>');
	echo ('<b>Endereço:</b><font color"#0000AA">'.$endereço.'</font><br>');
	echo ('<b>Email:</b><font color"#0000AA">'.$email.'</font><br>');
	echo ('<b>Telefone:</b><font color"#0000AA">'.$telefone.'</font><br>');
	echo ('<b>Whatsapp:</b><font color"#0000AA">'.$whatsapp.'</font><br><br>');

	echo ("Dados dos produtos: <br><br>");

	$nome = "calça jeans";
	$fabricante = "calvin klein";
	$composição = "algodão e elastano";
	$quantidade = "100 peças";
	$preco_compra = "R$55,00 unidade";
	$preco_venda = "R$200,00 unidade";

	echo ('<b>Nome:</b><font color"#0000AA">' .$nome.'</font><br>');
	echo ('<b>Fabricante:</b><font color"#0000AA">' .$fabricante.'</font><br>');
	echo ('<b>Composição:</b><font color"#0000AA">' .$composição.'</font><br>');
	echo ('<b>Quantidade:</b><font color"#0000AA">' .$quantidade.'</font><br>');
	echo ('<b>Preço compra:</b><font color"#0000AA">' .$preco_compra.'</font><br>');
	echo ('<b>Preço venda:</b><font color"#0000AA">' .$preco_venda.'</font><br>');

?>