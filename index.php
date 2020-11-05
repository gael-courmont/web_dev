<?php
    session_start();
    include('database.php');
    $page='';
    global $bdd;
    $bdd=new PDO('mysql:hoost=localhost;dbname=quizzdb','root');
    include("header.php");
    include('checkUser.php');
    if (isset($_GET['page'])){
        $page=$_GET['page'];}
    if (file_exists($page.'.php')){
        include($page.'.php');
    }
    include("Footer.php");
    ?>