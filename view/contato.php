<!DOCTYPE html>
<html  lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AMACC</title>
        <link href="../_css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.0.min.js" type="text/javascript"></script>
    </head>
    <body style="background-image: url('../_imagens/mulher-feliz-cancer.jpg')">
        <div id="interface">
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contato.php" target="_self">Contato</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="doar.php">Doar</a></li>
                </ul>
            </nav>
            <header id="cabecalho-cont">
                <hgroup>
                    <h1 id="amacc">Fale conosco</h1>
                    <h2>Associação de Mulheres Acometidas com Câncer</h2>
                </hgroup>
            </header>
            <section id="cont-esquerdo">
                <form method="post" action="#">


                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="colocarnome" placeholder="Nome Completo" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="colocaremail" placeholder="Digite seu email aqui" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="telefone">Telefone</label>
                                <input type="tel" class="form-control" id="colocartelephone" placeholder="(99)9 9999-9999">
                            </div>
                        </div>
                    </div>
                    <br>
                    <p id="index">Nosso número é: (61) 3047-7218</p>
                </form>
            </section>
            <aside id="cont-direito">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea  class="form-control" id="descricao" placeholder="Digite aqui sua mensagem!" required=""></textarea>
                        </div>
                        <div>
                            <button id="enviar" type="submit" class="btn btn-info" onclick="enviar()">Enviar
                                <script lang="javascript">
                                    function enviar() {
                                        alert("Enviado com sucesso!");
                                    }
                                </script>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <footer id="rodape-cont"> 
            <p>Copyright&copy; 2010 - by AMACC - Data da fundação 02 de Maio de 2010<br>
                <a href="https://www.facebook.com/AmaccAssociacaoDeMulheresAcometidasComCancer/" target="https://www.facebook.com/AmaccAssociacaoDeMulheresAcometidasComCancer/">Facebook</a> | <a href="https://www.instagram.com/cursoemvideo/" target="#">Instagram</a></p>
        </footer>
    </body>
</html>
