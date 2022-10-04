<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'Sim';
} else {
    $logged = 'Não';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>

<body>
    <div id="blur">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Erro de login!</p>';
        }
        ?>
        <form action="includes/process_login.php" method="post" name="login_form">
            <div class="form">
                <h1><span style="color:#35AAFC;">MED</span><span style="color:Red;">ALERT</span></h1> <br>
                <label for="email">Email:</label>
                <input type="text" name="email" class="input" /> <br>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="input" />
                <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" class="buttom" />
                <div class="text_login">
                    <p>Ainda não tem conta? <a href="register.php" class="link">Cadastre-se</a></p>
                    <p>Se já acabou, <a href="includes/logout.php" class="link">Sair</a>.</p>
                    <p>Está logado? <?php echo $logged ?>.</p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>