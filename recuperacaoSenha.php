<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-recuperacaoSenha.css">

    <title>Recuperação de Senha</title>
</head>

<body>
    <header class="head">
        <h1>Sistema de Avaliação Educacional</h1>
        <p><a href="home.php">Home</a></p>
    </header>

    <section class="recovery-container">
        <h2>Recuperação de Senha</h2>
        <p>Informe seu e-mail cadastrado para que possamos enviar as instruções de recuperação de senha.</p>


        <form method="POST" action="script/recuperacaoSenha.php">

            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            <button type="submit" name="submit">Enviar</button>
        </form>

        <p class="back"><a href="login.php">Voltar para Login</a></p>
    </section>

    <footer class="foot">
        <p>&copy; Direitos Acadêmicos reservados</p>
    </footer>
</body>

</html>