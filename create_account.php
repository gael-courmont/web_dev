    <body >
       
            <?php
            if ( isset($_POST['fname']) ) {
                $user=getUserByName($_POST['fname'],$_POST['lname']);
                if ($user==NULL)
                {
                    createUser($_POST['fname'],$_POST['lname'],$_POST['password']);
                    $user=getUserByName($_POST['fname'],$_POST['lname']);
                    ?>
                    <body> 
                        <div class="welcome"> 
                            <p1> 
                                Welcome <?php echo $user[0][2];?> <?php echo $user[0][1]; ?>  
                            </p1>
                            <br>
                            <a href="index.php?page=login" class="goToLogInPage">Login</a>
                        </div>
                    </body>
                <?php
                }
                else
                {
                echo    '<div class="container">
                            <div class="createAccountForm">
                            <p style="font-size:22;color:red;font-weight:bold;">nom déja utilisé</p>
                                <h2>Create account</h2>
            
                                <form action="index.php?page=create_account"  method = "POST">
                                    <label for="fname">First name:</label><br>
                                    <input type="text" id="fname" name="fname" value="John" required><br>
                                    <label for="lname">Last name:</label><br>
                                    <input type="text" id="lname" name="lname" required><br><br>
                                    <label for="password">password:</label><br>
                                    <input type="text" id="password" name="password" value="***" required><br><br>
                                    <input type="submit" value="Submit">
                                </form> 
                            </div>
                        </div>';
                }
            }
            else{?>
            <div class="container">
                <div class="createAccountForm">
                    <h2>Create account</h2>

                    <form action="index.php?page=create_account"  method = "POST">
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" required><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" required><br><br>
                        <label for="password">password:</label><br>
                        <input type="text" id="password" name="password" required><br><br>
                        <input type="submit" value="Submit">
                    </form> 
                </div>
            </div>
            <?php } ?>
    </body>
