<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="txtico.png">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Nova Senha</title>

    <?php
    session_start();
    ?>

</head>
<body>							
        <div class="containerStyle">
            <h2>Alterar Senha</h2>
            <form action="../php/AlterarSenha.php" method="POST" class="box">
                <div class="field">
                        <div class="input-field">
                            <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                            <label>Email: </label>
                        </div>
                </div>
                <div class="field">
                        <div class="input-field">
                            <input type="password" placeholder="*******" class="input" name="novasenha" required>
                            <label>Nova Senha: </label>
                        </div>
                </div>
                <div class="center">
                    <button class="button is-success">Cadastrar</button>
            </form>
                            
    <?php                       
        if(isset($_SESSION['Erro'])){
        echo $_SESSION['Erro'];
        unset($_SESSION['Erro']);
        }
    ?>

</body>
</html>