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
    <body style="background-image: url('../_imagens/cancer-cancer.jpg')">
        <div id="interface">
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="" target="_self">Doar</a></li>
                </ul>
            </nav>
            <header id="cabecalho">
                <hgroup>
                    <h1 id="amacc">Fazendo o Bem!</h1>
                    <h2>A caridade é o único tesouro que se aumenta ao dividi-lo</h2>
                </hgroup>
            </header>
            <section id="lado-esquerdo">
                <h4 class="mb-4">Boleto</h4>
                <h5>“Deve-se doar com a alma livre, simples, apenas por amor, espontaneamente!"
                    Martinho Lutero.</h5><br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="dinheiro">Desejo doar R$: </label>
                        <input type="number" id="valorboleto" min="1,00" max="100.000,00" class="form-control" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="" required="">
                    </div>
                    <div class="col-md-5">
                        <label>CPF</label>
                        <input type="text" class="form-control" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <label>Telefone</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-5">
                        <label>E-mail</label>
                        <input type="email" class="form-control" required="">
                    </div>

                    <div class="col-6 col-md-4">
                        <label>Nascimento</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <a id="gerar" class="btn-primary btn-lg btn-block" href="#" id="gerar" type="submit" onclick="gerar()">Gerar Boleto!</a>
                <script lang="javascript">
                    function gerar() {
                        alert("Salvando vidas...!");
                    }
                </script>
            </section>
        </div>



        <aside id="lado-direito">
            <h4 class="mb-4">Cartão de Crédito</h4>
            <h5>“É a intenção, e não a doação, que faz o doador."
                Gotthold Lessing.</h5>
            <br>
            <br>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="dinheiro">Desejo doar R$: </label>
                    <input type="number" min="1,00" max="100.000,00" class="form-control" required="">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="nome">Nome do titular do cartão</label>
                    <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
                </div>
                <div class="col-md-6">
                    <label for="numero">Número do cartão</label>
                    <input type="text" class="form-control" id="cc-numero" placeholder="" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4">
                    <label for="expiracao">Data de vencimento</label>
                    <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
                </div>
                <div class="col-6 col-md-4">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">

                </div>
            </div>
            <hr class="mb-4">
            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
            <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post" id="doarpagseguro" onclick="doarpagsguro()">
                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                <input type="hidden" name="currency" value="BRL" />
                <input type="hidden" name="receiverEmail" value="amacc.ong@gmail.com" />
                <input type="hidden" name="iot" value="button" />
                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
            </form>
            <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
            <script lang="javascript">
                function doarpagseguro() {
                    alert("Salvando vidas...!");
                }
            </script>
        </aside>

        <footer id="rodape-doar"> 
            <p>Copyright&copy; 2010 - by AMACC - Data da fundação 02 de Maio de 2010<br>
                <a href="https://www.facebook.com/AmaccAssociacaoDeMulheresAcometidasComCancer/" target="https://www.facebook.com/AmaccAssociacaoDeMulheresAcometidasComCancer/">Facebook</a> | <a href="https://www.instagram.com/cursoemvideo/" target="#">Instagram</a></p>
        </footer>
    </body>
</html>