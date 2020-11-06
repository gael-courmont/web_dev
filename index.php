<?php
    session_start();
    include('database.php');
    $page='';
    global $bdd;
    $bdd=new PDO('mysql:hoost=localhost;dbname=quizzdb','root');
    include('checkUser.php');
    if ( (isset($_POST['fname'])) && (!empty($_POST['fname'])) )       
        {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pass=$_POST['password'];
        $user=connection($fname,$lname,$pass);
        if ($user){
            Session_lancement($user);
        }
    }
    else{
        
    }

    ?>
    
    <DOCTYPE=HMTML>
    <html>
        <?php
        include("header.php");
        if (isset($_GET['page'])){
            $page=$_GET['page'];}
        if (file_exists($page.'.php')){
            include($page.'.php');
        }
        include("Footer.php");?>
    </html>
