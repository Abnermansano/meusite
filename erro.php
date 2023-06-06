<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de Login</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
      color: #000000;
    }

    .error-container {
      width: 300px;
      background-color: #ffffff;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #0000ff;
      text-align: center;
    }

    p {
      text-align: center;
    }

    button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #0000ff;
      border: none;
      color: #ffffff;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #000099;
    }
  </style>
</head>
<body>
  <div class="error-container">
    <h2>Erro de Login</h2>
    <p>Nome de usuário ou senha inválidos.</p>
    <button onclick="window.history.back()">Voltar</button>
  </div>
</body>
</html>