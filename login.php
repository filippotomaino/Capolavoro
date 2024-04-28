<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @font-face {
            font-family: ubuntu;
            src: url(Ubuntu/Ubuntu-Regular.ttf);
        }

        * {
            box-sizing: border-box;
            font-family: ubuntu;
            color: white;
            font-size: 40px;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #0A0908;
            height: 100vh;
        }
    </style>
</head>
<body>
<?php
    function controllo($nome, $email, $password) {
        if(!is_null($nome) AND !is_null($email) AND !is_null($password)) {
            $nome_corretto = "Filippo";
            $email_corretta = "filippo.tomaino@iisfermigalilei.it";
            $password_corretta = "abc";

            if($nome == $nome_corretto AND $email == $email_corretta AND $password == $password_corretta) {
                echo "<div>" . "Benvenuto Filippo! Che bella giornata oggi!" . "</div>";
            } else {
                echo "<div>" . "I dati inseriti non sono corretti." . "</div>";
            }
        } else {
            echo "<div>" . "Inserisca i dati con dei formati validi." . "</div>";
        }
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo controllo($name, $email, $password);
?>
</body>
</html>