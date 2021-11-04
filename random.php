<?php
    session_start();
    $login = "antondp750@gmail.com";
    $password = "assistant";
//    $connection = mysqli_connect('127.0.0.1', 'root', '', 'user_accounts');
//    if(!$connection){
//        echo 'connection lost';
//        exit();
//    }
//    $request = mysqli_query($connection, "
//    SELECT password, login FROM user_access_data WHERE login = '" . $_POST['username'] . "'");
//    if(!$request){
//        echo 'request lost';
//        exit();
//    }

//    print_r(mysqli_fetch_assoc($request));
//    $r = mysqli_fetch_assoc($request);
//    echo $r["password"];

    if($_POST['username']==$login and $_POST['userpass']==$password){
        $_SESSION['validation']="correct";
        header("Location:index.php");
   } elseif ($_POST['username']=="" or $_POST['userpass']==""){
        $_SESSION['validation']="noReqests";
        header("Location:index.php");
    } else{
        $_SESSION['validation']="incorrect";
        header("Location:index.php");
    }

