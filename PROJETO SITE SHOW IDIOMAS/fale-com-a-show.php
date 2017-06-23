
<?php
$msg=0;
@$msg= $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Show Idiomas</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" href="_css/form.css"/>
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="_imagens/imagetitle.jpg" />

    <!-- sample fb meta -->
    <meta property="og:title" content="Ridiculously Responsive Social Sharing Buttons" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://kurtnoble.com/labs/rrssb/fotos-show.html" />
    <meta property="og:image" content="http://kurtnoble.com/labs/rrssb/media/facebook-share.jpg" />
    <meta property="og:description" content="No one wants to create social buttons over and over again. RRSSB is a super flexible system that works in any container. SASS-powered, retina ready, svg images, tiny file size and auto-magical resizing. A KNI Labs freebie."/>

    <!-- sample twitter meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@therealkni">
    <meta name="twitter:creator" content="@dbox">
    <meta name="twitter:title" content="Ridiculously Responsive Social Sharing Buttons">
    <meta name="twitter:description" content="Ridiculously Responsive Social Sharing Buttons by @dbox and @joshuatuscan: http://kurtnoble.com/labs/rrssb | http://kurtnoble.com/labs/rrssb/media/rrssb-preview.png">
    <meta name="twitter:image" content="http://kurtnoble.com/labs/rrssb/media/rrssb-preview.png">

    <!-- Stylesheet required to power RRSSB. Copy this css file to your header or merge directly into your css -->
    <link rel="stylesheet" href="_socialmedias/css/rrssb.css" />
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

    <p id="redes">Show nas Redes:</p>


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

<hgroup id="trabalhenashow">
    <h1 id="pm">Fale com a Show!!</h1>
    <h3 id="descontos"></h3>
</hgroup>

<form action="form_process.php" method="post" id="falecomashow" name="contact_form">

    <fieldset id="usuario"><legend>Identificação do Usuário</legend>
        <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
        <p><label for="cTelefone">Telefone:</label> <input type="tel" name="tTelefone" id="cTelefone" size="12" maxlength="12" placeholder="12 dígitos"/></p>
        <p><label for="cEmail">E-mail:</label> <input type="email" name="tEmail" id="cEmail" size="20" maxlength="60"/></p>
        <fieldset id="sexo"><legend>Sexo</legend>
            <input type="radio" name="sexo" id="cMasc" value="homem" checked/> <label for="cMasc">Masculino</label><br/>
            <input type="radio" name="sexo" id="cFem" value="mulher"/> <label for="cFem">Feminino</label></fieldset>
        <p><label for="cNasc">Data/Nascimento:</label> <input type="date" name="tNasc" id="cNasc"/></p>
    </fieldset>

    <fieldset id="endereco2"><legend>Endereço do Usuário</legend>
        <p><label for="cRua">Logradouro:</label><input type="text" name="ttRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
        <p><label for="cNum">Número:</label> <input type="number" name="tNum" id="cNum" min="0" max="999999"/></p>
        <P><label for="cEst">Estado:</label>
            <select name="tEst" id="cEst">
                <optgroup label="Região Sul">
                    <option selected value="RS">Rio Grande do Sul</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="PR">Paraná</option>
                </optgroup>

                <optgroup label="Região Sudeste">
                    <option value="SP">São Paulo</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="RJ">Rio de Janeiro</option>
                </optgroup>
            </select> </P>
        <p><label for="cCid">Cidade:</label>
            <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"/></p>
        <datalist id="cidades">
            <option value="Gravataí"></option>
            <option value="Glorinha"></option>
            <option value="Santo Antônio"></option>
            <option value="Cachoeirinha"></option>
            <option value="Porto Alegre"></option>
            <option value="Canoas"></option>
        </datalist>
    </fieldset>

    <fieldset id="mensagem2"><legend>Mensagem do Usuário</legend>
        <p><label for="cMsg2">Mensagem:</label>
            <textarea name="tMsg" id="cMsg2" cols="45" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
    </fieldset>

    <fieldset id="pedido2"><legend id="interessefale">Interesse em algum curso?</legend>
        <p><input type="checkbox" name="tPedin" id="cPedin" checked/>
            <label for="cPedin">Inglês</label></p>

        <p><input type="checkbox" name="tPedesp" id="cPedesp" checked/>
            <label for="cPedesp">Espanhol</label></p>

        <p><input type="checkbox" name="tPedita" id="cPedita" checked/>
            <label for="cPedita">Italiano</label></p>

        <p><input type="checkbox" name="tPedfran" id="cPedfran" checked/>
            <label for="cPedfran">Francês</label></p>

        <p><input type="checkbox" name="tPedport" id="cPedport" checked/>
            <label for="cPedport">Português</label></p>

    </fieldset>
    <input id="enviar2" type="submit" value="Enviar"/>
</form>

<?php endif; ?>

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