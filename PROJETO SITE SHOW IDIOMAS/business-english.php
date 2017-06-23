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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
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

<h3 id="pm">Faça a sua Pré Matrícula!!</h3>

<h4 id="businessenglish">Business English</h4>


<img id="businessenglishflag" src="_imagens/businessenglish.jpg">


<p id="sobrebusinessenglish">Business English da Show ajuda aqueles que precisam se comunicar melhor em Inglês no trabalho, por ensinar uma gama de habilidades de comunicação empresarial.
    O curso apresenta clipes de vídeo para cada unidade, incluindo clipes de documentários, entrevistas e cenários autênticos dramatizadas apresentando habilidades de comunicação empresarial.
    O Manual Interativo no DVD-ROM também está disponível online. Ele permite a você aprendizagem combinada ou à distância, e permite que você se comunique fora de sala de aula.
    As Competências do Business English associadas podem, opcionalmente, serem adicionadas ao pacote Business Show, e fornece prática acadêmica e habilidades de Estudos de empresas  para estudantes.
</p>





<form action="business-english_process.php" method="post" id="falebusinessenglish">

            <fieldset id="usuario"><legend>Identificação do Usuário</legend>
                <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
                <p><label for="cTelefone">Telefone:</label> <input type="tel" name="tTelefone" id="cTelefone" size="12" maxlength="12" placeholder="12 dígitos"/></p>
                <p><label for="cEmail">E-mail:</label> <input type="email" name="tEmail" id="cEmail" size="20" maxlength="60"/></p>
                <fieldset id="sexo"><legend>Sexo</legend>
                    <input type="radio" name="sexo" id="cMasc"  checked/> <label for="cMasc">Masculino</label><br/>
                    <input type="radio" name="sexo" id="cFem" /> <label for="cFem">Feminino</label></fieldset>
                <p><label for="cNasc">Data de Nascimento:</label> <input type="date" name="tNasc" id="cNasc"/></p>
            </fieldset>

            <fieldset id="endereco"><legend>Endereço do Usuário</legend>
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

            <fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
                <p><label for="cMsg">Mensagem:</label>
                    <textarea name="tMsg" id="cMsg" cols="45" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
            </fieldset>

            <fieldset id="pedido"><legend>Interesse em </legend>
                <p><input type="checkbox" name="tBusIng" id="cBusIng" checked/>
                    <label for="cBusIng">Fazer um curso de Business English</label></p>


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