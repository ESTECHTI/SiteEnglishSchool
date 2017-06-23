
<html lang="pt-br">
<meta charset="UTF-8">
<?php
$subjectPrefix = '[Contato via Site]';
$para = "show_idiomas@hotmail.com, secretaria@escolashowidiomas.com.br";
$assunto= "Contato pelo Site";
$tNome = $_REQUEST["tNome"];
$tTelefone = $_REQUEST["tTelefone"];
$tEmail = $_REQUEST["tEmail"];

$tMsg = $_REQUEST["tMsg"];

$uploaddir = './uploads';

$uploadfile = $uploaddir . $_FILES['arquivo'] ['name'];

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
    echo "Arquivo Enviado";}
else {echo "Não foi possível enviar o arquivo.";}

$corpo= "<strong> Mensagem de Contato</strong><br><br>";
$corpo .="<strong> Nome: </strong> $tNome";
$corpo .="<br><strong> Telefone: </strong> $tTelefone";
$corpo .="<br><strong> Email: </strong> $tEmail";
$corpo .="<br><strong> Mensagem: </strong> $tMsg";
$corpo .="<br><strong> Enviar o arquivo: </strong> $uploadfile ";

$header="Contente-Type: text/html; charset= utf-8\n";
$header .="From: $email Reply-to: $email\n";


@mail($para,$assunto,$corpo,$header);

header("location:trabalhe-conosco.php?msg=enviada");

?>