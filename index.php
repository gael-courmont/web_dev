<?php
    session_start();
    include('database.php');
    $page='';
    global $bdd;
    $bdd=new PDO('mysql:hoost=localhost;dbname=quizzdb','root');
    include('checkUser.php');
    if ( (isset($_POST['fname'])) && (!empty($_POST['fname'])) && (isset($_GET['page'])) && ($_GET['page']=='connection') )        
        {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pass=$_POST['password'];
        $user=connection($fname,$lname,$pass);
        if ($user){
            Session_lancement($user);
            $sentence="User connected";
        }
        else{
            $sentence="User don't exist";
        }
    }
    if ( (isset($_GET['page'])) && (($_GET['page'])=='disconnect') ){
        disconnect();
        $sentence='you have been disconnected';
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
        if ((isset($_GET['page'])) && ( ($_GET['page']=='connection') || (($_GET['page'])=='disconnect'))  ){
            echo $sentence;
        }
        include("Footer.php");?>
    </html>
