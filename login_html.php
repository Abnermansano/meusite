<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" type="text/css" href="senha.css">
</head>
<body>
     <div class="login-container">
     <h2>Login</h2>
    <center><p>Efetue o login para continuar</p></center>
    <form action="login_html.php" method="POST">
      <input type="text" name="username" placeholder="Nome de usuário" required>
      <input type="password" name="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
      <button class="button" onclick="history.back()">Voltar</button>
    </form>
  </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Aqui você pode adicionar a lógica de verificação do usuário e senha
  // e redirecionar para a página de destino caso as credenciais sejam válidas.

  // Exemplo simples:
  if ($username === "admin" && $password === "s123") {
    header("Location: html.php");
    exit();
  } else {
    header("Location: erro.php");
    exit();
  }
}
?>
</body>
</html>