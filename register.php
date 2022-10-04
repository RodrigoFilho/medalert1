<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="stylesheet" href="register.css" />
</head>

<body>
    <div id="blur">
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            <div class="form">
                <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
                <h1><span style="color:#35AAFC;">MED</span><span style="color:Red;">ALERT</span></h1> <br>
                <?php
                if (!empty($error_msg)) {
                    echo $error_msg;
                }
                ?>
                <div class="txt_senha">
                    <ul>
                        <li>Os nomes de usuário podem conter apenas dígitos, <br> letras maiúsculas e minúsculas e sublinhados</li>
                        <li>Emails tem que ser em formato válido</li>
                        <li>A senha deve conter 6 ou mais caracteres</li>
                        </li>
                    </ul> <br>
                </div>
                <div class="form_register">
                    <label for="">Nome:</label> <br>
                    <input type='text' name='username' id='username' class="input" /><br>
                    <label for="">Email:</label> <br>
                    <input type="text" name="email" id="email" class="input" /><br>
                    <label for="">Senha:</label> <br>
                    <input type="password" name="password" id="password" class="input" /><br>
                    <label for="">Confirme a senha:</label> <br>
                    <input type="password" name="confirmpwd" id="confirmpwd" class="input" /><br>
                    <input type="button" value="Registrar" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" class="buttom" />
                </div>
            </div>
            <p>Volte para a <a href="index.php" class="link"> página de login</a>.</p>
        </form>
    </div>
</body>

</html>