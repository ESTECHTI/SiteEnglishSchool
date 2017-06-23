<?php
header('Content-Type: text/html; charset=utf-8');

?>

<?php
$msg=0;
@$msg= $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Show Idiomas</title>
    <link rel="stylesheet" href="_css/normalize.css"/>
    <link rel="stylesheet" href="_css/gallery.theme.css"/>
    <link rel="stylesheet" href="_css/gallery.min.css"/>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" href="_css/form.css"/>
    <link rel="icon" type="image/png" href="_imagens/imagetitle.jpg" />
</head>
<body class="center clearfix">
<?php if($msg=="enviado"): ?>
    <h1>Mensagem enviada, agradecemos seu contato!</h1>
<?php else: ?>
<header>
    <img id="logo" src="_imagens/logoshowsite.jpg">

    <img id="whats" src="_imagens/whatsapp1.jpg">

    <hgroup id="fones">
        <h3>Ligue: (51) 3043-6695 / 3042-6696</h3>
        <h3>Cel. (51)9221-7897</h3>
        <h3>e-mail: secretaria@escolashowidiomas.com.br</h3>
    </hgroup>

    <h3 id="redes">Show nas Redes:</h3>


    <a href="https://www.facebook.com/escolashowidiomas" target="_blank"><img id="face1" src="_imagens/face.jpg"></a>

    <a href="https://plus.google.com/u/0/+EscolaShowIdiomasGravata%C3%AD/posts" target="_blank"><img id="googleplus1" src="_imagens/googleplus.jpg"></a>

    <a  href="https://twitter.com/Show_Idiomas" target="_blank"><img id="twitter1" src="_imagens/twitter.jpg"></a>

    <a  href="https://www.youtube.com/user/ShowIdiomas" target="_blank"><img id="youtube1" src="_imagens/youtube.jpg"></a>

</header><!-- fim header -->

<nav class="menu">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="">Cursos</a>
            <ul>
                <li><a href="ingles.php">Inglês</a></li>
                <li><a href="espanhol.php">Espanhol</a> </li>
                <li><a href="italiano.php">Italiano</a> </li>
                <li><a href="frances.php">Francês</a> </li>
                <li><a href="portugues.php">Português</a> </li>
            </ul>
        </li>
        <li><a href="fotos-show.html">Fotos Show</a></li>
        <li><a href="_shownews/show-news.html">Show News</a></li>
        <li><a href="dicas-do-professor.html">Dicas do Prof.</a></li>
        <li><a href="_calendario/meses.html">Calendário</a></li>
        <li><a href="onde-estamos.html">Onde Estamos</a></li>
        <li><a href="fale-com-a-show.php">Fale c/Show</a></li>
    </ul>
</nav>


<h3 id="pmtrab">Trabalhe na Show!!</h3>
<h4 id="descontos">Envie seu currículo!!</h4>


<form action="trabalhe-conosco_process.php" id="fContato"  method="post" enctype="multipart/form-data">

            <fieldset id="usuario"><legend>Identificação do Usuário</legend>
                <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
                <p><label for="cTelefone">Telefone:</label> <input type="tel" name="tTelefone" id="cTelefone" size="12" maxlength="12" placeholder="12 dígitos"/></p>
                <p><label for="cEmail">E-mail:</label> <input type="email" name="tEmail" id="cEmail" size="20" maxlength="60"/></p>
            </fieldset>


            <fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
                <p><label for="cMsg">Mensagem:</label>
                    <textarea name="tMsg" id="cMsg" cols="45" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
            </fieldset>

            <fieldset id="pedido"><legend>Enviar o arquivo</legend>
                <input type="file" name="arquivo" size="20"/><br />


            </fieldset>
            <input id="enviar" type="submit" value="Enviar"/>
        </form>
<?php endif; ?>
<img id="mapashowfrances" src="_imagens/mapa.jpg">


<footer>
    <small class="copyright">
        <p>Copyright © 2016 - Todos os Direitos Reservados à Show Idiomas - Desenvolvido por Elisandro
    </small><!-- fim .copyright -->
</footer><!-- fim footer -->

<script src="_javascript/jquery.min.js"></script>
<script>
    $(".menu>ul").addClass("js");
    $(".menu>ul").addClass("js").before('<div class="atalho">Menu</div>');

    $(".atalho").click(function(){
        $(".menu>ul").toggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 768) {
            $(".menu>ul").removeAttr("style");
        }
    });
</script>
</body>
</html>