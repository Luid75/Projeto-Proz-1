<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, rgb(108, 19, 167), #fff);
    }

    div{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: #fff;
    }

    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }

    .inputSubmit{
        background-color: rgb(151, 42, 240);
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
    }

    .inputSubmit:hover{
        background-color: rgb(82, 16, 145);
    }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST"></form>
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </div>
</body>
</html>