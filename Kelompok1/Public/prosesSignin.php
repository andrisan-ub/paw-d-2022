<?php
    session_start();
    if(isset ($_POST['signin'])){
        $unameLogin = $_POST['unameLogin'];
        $passLogin = $_POST['passLogin'];

        if($unameLogin == $_SESSION['unameDaftar'] && $passLogin == $_SESSION['passDaftar']){
            header("location: ../index.html");
        }else{
            header("location:signup.html");
        }
    }