<?php
    session_start();
    if(isset ($_POST['signup'])){
        $unameDaftar = $_POST['unameDaftar'];
        $passDaftar = $_POST['passDaftar'];
        header("location:signin.html");    
        $_SESSION['unameDaftar'] = $unameDaftar;
        $_SESSION['passDaftar'] = $passDaftar;
    }