
<html lang="pt-br">
<meta charset="UTF-8">
<?php
$subjectPrefix = '[Contato via Site]';
$para = "show_idiomas@hotmail.com, secretaria@escolashowidiomas.com.br";
$assunto= "Contato pelo Site";
$tNome = $_REQUEST["tNome"];
$tTelefone = $_REQUEST["tTelefone"];
$tEmail = $_REQUEST["tEmail"];
$sexo = $_REQUEST["sexo"];
$tNasc = $_REQUEST["tNasc"];

$ttRua = $_REQUEST["ttRua"];
$tNum = $_REQUEST["tNum"];
$tEst = $_REQUEST["tEst"];

$tCid = $_REQUEST["tCid"];

$tMsg = $_REQUEST["tMsg"];

$tIta = $_REQUEST["tIta"];

$corpo= "<strong> Mensagem de Contato</strong><br><br>";
$corpo .="<strong> Nome: </strong> $tNome";
$corpo .="<br><strong> Telefone: </strong> $tTelefone";
$corpo .="<br><strong> Email: </strong> $tEmail";
$corpo .="<br><strong> Sexo: </strong> $sexo";
$corpo .="<br><strong> Nasc: </strong> $tNasc";
$corpo .="<br><strong> Rua: </strong> $ttRua";
$corpo .="<br><strong> Número: </strong> $tNum";
$corpo .="<br><strong> Estado: </strong> $tEst";
$corpo .="<br><strong> Cidade: </strong> $tCid";
$corpo .="<br><strong> Mensagem: </strong> $tMsg";
$corpo .="<br><strong> Interesse em: </strong> $tIta ";

$header="Contente-Type: text/html; charset= utf-8\n";
$header .="From: $email Reply-to: $email\n";


@mail($para,$assunto,$corpo,$header);

header("location:italiano.php?msg=enviada");

?>