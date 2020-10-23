<!DOCTYPE html>
<html>
    
    <head>
        <title>Geoquizz</title>
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="common.css" />
    </head>

    <?php include 'header.php'?>
    
    <body >

        <h2>Create account</h2>

        <form action="account_creation.php"  method = "POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>*
        <label for="password">password:</label><br>
        <input type="text" id="password" name="password" value="***"><br><br>
        <input type="submit" value="Submit">
        </form> 

    </body>
    
    <?php include 'Footer.php'?>
</html>
