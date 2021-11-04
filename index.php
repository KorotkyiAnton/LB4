<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/png">

</head>
<body>
<div id="content">
    <div id="login">
        <p style="font-size: 50px; font-weight: bold;">Вхід</p>
        <form action="random.php" method="post">
            <p><input id="email" type="email" placeholder="Type your E-mail" name="username"></p>
            <p><input id="password" type="password" placeholder="Type your password" name="userpass"></p>
            <p><input id="apply" type="submit" value="Увійти"></p>
        </form>
        <?php
            session_start();
            if($_SESSION==null){
                echo "<p id='message'>Введіть логін та пароль</p>";
            } else {
                switch ($_SESSION['validation']) {
                    case "correct":
                        $_SESSION['validation'] = "noReqests";
                        echo "<p id='rightdata'>Раді вас бачити</p>";
                        session_destroy();
                        break;
                    case "noReqests":
                        $_SESSION['validation'] = "noReqests";
                        echo "<p id='message'>Немає акаунта? Зареєструйтеся</p>";
                        session_destroy();
                        break;
                    case "incorrect":
                        $_SESSION['validation'] = "noReqests";
                        echo "<p id='wrongdata'>Невірний логін чи пароль</p>";
                        session_destroy();
                        break;
                }
            }
        ?>
    </div>
</div>
</body>
</html>
