<?php
        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
        {
            // Acessa
            include_once('config.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            echo '<p>Email: ' . $email . '</p>';
            echo '<p>Senha: ' . $senha . '</p>';
        }
        else 
        {
            // Não acessa
            header('Location: login.php');
        }
?>