<?php

	if (isset($_post['nEmail']) && !empty($_post['nEmail'])) {

	$nome = addcslashes($_post['nNome']);
	$email = addcslashes($_post['nEmail']);

	$to = "pabloabias37@gmail.com.br";
	
	$subject = "Teste de Envio de E-mail";

	$body = "Nome: ".$nNome. "\n"
			"Email: ".$nEmail. "\n";

	$header = "From:pabloabias37@gmail.com.br"."\r\n".
				"Reply-to:".$nEmail."\r\n".
				"X=Mailer:PHP/".phpversion();

	if(mail($to, $subject, $body, $header)){
			echo( "Email enviado com sucesso!");
		}else{
			echo( "Email não enviado!")		};
	}
?>