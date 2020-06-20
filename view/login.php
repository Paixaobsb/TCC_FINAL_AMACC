<!DOCTYPE html>
<html  lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login AMACC</title>
        <link href="../_css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.0.min.js" type="text/javascript"></script>
    </head>
    <body style="background-image: url('../_imagens/estrada1.jpg')">

        <nav id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contato.php" target="">Contato</a></li>
                <li><a href="" target="_self">Login</a></li>
                <li><a href="doar.php">Doar</a></li>
            </ul>
        </nav>
        <header id="cabecalho">
            <hgroup>
                <h1 id="amacc">Login</h1>
                <h2 id="subamacc">Associação de Mulheres Acometidas com Câncer</h2>
            </hgroup>
        </header>
        <form role="form" method="post" action="../control/controlLogin.php">
            <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="../_imagens/amacc.jpg" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" name="login" type="text" autofocus="">
                            </div>
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" name="acessar" class="btn btn-sm btn-success" value="Acessar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>
<footer id="rodapelogin"> 
    <p>Copyright&copy; 2010 - by AMACC - Data da fundação 02 de Maio de 2010<br>
        <a href="https://www.facebook.com/AmaccAssociacaoDeMulheresAcometidasComCancer/" target="https://www.facebook.com/AmaccAssociacaoDeMulheresAcometidasComCancer/">Facebook</a> | <a href="https://www.instagram.com/cursoemvideo/" target="#">Instagram</a></p>
</footer>
</body>
</html>
