
    
    <body >
        <?php 
        if ( isset($_POST['fname'])) {
            $user=getUserByName($_POST['fname'],$_POST['lname']);
            if ($user==NULL){
                if ($_POST['fname']!=NULL & $_POST['lname']!=NULL & $_POST['password']!=NULL){
                    createUser($_POST['fname'],$_POST['lname'],$_POST['password']);
                };

                $user=getUserByName($_POST['fname'],$_POST['lname']);
            ?>
            <body>
                <p1> Welcome <?php echo $user[0][2];?> <?php echo $user[0][1]; if(session_status()==PHP_SESSION_ACTIVE){echo "oui la session est active";}?>
                     
                </p1>
                </br>
                <div class="menuCategory">
                    <a href="index.php?page=home">Return to home page<a/>
                </div>
            </body>
        <?php
            }
            else{
                echo ("nom déja utilisé");
            }
        }
        else{?>

        <h2>Create account</h2>

        <form action="index.php?page=create_account"  method = "POST">
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
