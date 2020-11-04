<!DOCTYPE html>
<html>
    
    <head>
        <title>Geoquizz</title>
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="common.css" />
    </head>

    <?php include 'header.php'?>
    
    <body >
        <?php 
        if ( isset($_POST['fname'])) {
            $user=getUserByName($_POST['fname']);
            if ($user==NULL){
                if ($_POST['fname']!=NULL & $_POST['lname']!=NULL & $_POST['password']!=NULL){
                    createUser($_POST['fname'],$_POST['lname'],$_POST['password']);
                };

                $user=getUserByName($_POST['fname']);
            ?>
            <body>
                <p1> Welcome
                    <?php
                    echo $user[0][1];
                    echo $user[0][0];
                    ?>
                </p1>
            </body>
        <?php
            }
            else{
                echo ("nom déja utilisé");
            }
        }
        else{?>

        <h2>Create account</h2>

        <form action=<?php echo $_SERVER['PHP_SELF'];?>  method = "POST">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="John"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <label for="password">password:</label><br>
            <input type="text" id="password" name="password" value="***"><br><br>
            <input type="submit" value="Submit">
        </form> 
        <?php }?>
    </body>
    
    <?php include 'Footer.php'?>
</html>
