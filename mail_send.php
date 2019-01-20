<?php

$para= "cafundofilms@gmail.com";
$assunto="Mensagem do site";
$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$mensagem= $_POST['mensagem'];

		$corpo="<strong> Mensagem do site </strong><br><br>";
		$corpo.="<strong><br>Nome </strong> $nome";
		$corpo.="<strong><br> Mensagem do site </strong> $fome";
		$corpo.="<strong><br> Mensagem do site </strong> $email";
		$corpo.="<strong><br> Mensagem do site </strong> $mensagem";

		$header="Content-Type: text/html; charset= utf-8\n";
		$header.="From: $email Reply-to: $email\n";

mail($para,$assunto,$corpo,$header);


// if ($nome && validaEmail($de) && $mensagem) {
//     enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
//     $pagina = "mail_ok.php";
// } else {
//     $pagina = "mail_error.php";
// }

header("location:$index.php?msg=enviado");

?>