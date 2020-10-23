
<?php include_once 'database.php';?>

<?php
$user=getUserByName($_POST['fname']);
if ($user==NULL){
 if ($_POST['fname']!=NULL & $_POST['lname']!=NULL & $_POST['password']!=NULL){
     createUser($_POST['fname'],$_POST['lname'],$_POST['password']);
 };

 $user=getUserByName($_POST['fname']);}
 else{
     echo ("nom déja utilisé");
 }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Geoquizz</title>
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="common.css" />
    </head>
    <?php include 'header.php'?>
    <body>
        <p1> Welcome
        <?php
        echo $user[0][1];
        echo $user[0][0];
        ?>
        </p1>
    </body>
    <?php include 'Footer.php'?>
</html>
