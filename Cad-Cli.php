<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"><!-- Icons -->
    <link rel="stylesheet" href="assets/css/Cad-Cli.css"> <!-- Link CSS -->
    <title>MobilyTech</title>
</head>

<body>

    <header> <!-- Inicio Cabeçalho -->
        <div id="title">
            <h1>MobilyTech</h1>
        </div>

        <ul>
            <li><a href="Tecnicos.php">Tecnicos</a></li>
            <li><a href="#">Chamados</a></li>
            <li><a href="#">Contatos</a></li>
            <li><a href="#h2sobre">Sobre</a></li>
            <li><a href="Login.php" id="inscreva-se-button">Já tem uma conta?</a></li>
            <li><a href="Cad-Pj.php" id="inscreva-se-button">Trabalhe conosco</a></li>
        </ul>
    </header> <!-- Fim Cabeçalho --> 


    <div class="container"> <!-- Inicio cadastro -->

        <div class="form-image">
            <img src="assets/images/Cad-Cli/undraw_Content_team_re_6rlg.png" alt="imagem">
        </div>

        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Primeiro nome</label>
                            <input type="text" name="firstname" id="firstname" placeholder="Digite seu primeiro nome">
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label for="lestname">Sobrenome</label>
                                <input type="text" name="lestname" id="lestname" placeholder="Digite seu sobrenome">
                            </div>

                            <div class="input-group">
                                <div class="input-box">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Digite seu email">
                                </div>

                                <div class="input-group">
                                    <div class="input-box">
                                        <label for="password">Senha</label>
                                        <input type="password" name="password" id="password"
                                            placeholder="Digite sua senha">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-box">
                                            <label for="confirm-password">Confime sua
                                                senha</label>
                                            <input type="password" name="confirm-password" id="confirm-password"
                                                placeholder="Confirme sua senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="continue-button">
                                    <button type="submit"><a href="#">Continuar</a></button>
                                </div>
            </form>
        </div>
    </div>
    <form> <!-- Fim cadastro -->

</body>

</html>