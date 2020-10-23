<!DOCTYPE html>
<html>
    <head>
        <title>Geoquizz</title>
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="common.css" />
    </head>
    <?php include 'header.php'?>
    <body>
            <div class="header">
                <h1 id="title">Quiz #1</h1>
            </div>

            <div>
                <div class="quesFrame" >'
                    <p style="font-size: 22;">click on the spain capital</p>
<<<<<<< Updated upstream
                    <form action="submitAction.php"  method = "POST">
                        <input type="radio" name="value" value="male"> paris<br>
                        <input type="radio" name="value" value="female"> londres<br>
                        <input type="radio" name="value" value="other"> madrid
=======
                    <form action="QuestionCheck.php?quizz=capitale"  method = "POST">
                        <input type="radio" name="q1" value="paris"> paris<br>
                        <input type="radio" name="q1" value="londres"> londres<br>
                        <input type="radio" name="q1" value="madrid"> madrid
>>>>>>> Stashed changes
                   
                </div>

                <div class="quesFrame">
                    <p style="font-size: 22;">click on the french capital</p>
                    
<<<<<<< Updated upstream
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> paris</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> londres</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> barcelone</label><br>
=======
                        <input type="checkbox" id="par" name="q2" value="paris">
                        <label for="par"> paris</label><br>
                        <input type="checkbox" id="lond" name="q2" value="londres">
                        <label for="lond"> londres</label><br>
                        <input type="checkbox" id="bar" name="q2" value="barcelone">
                        <label for="bar"> barcelone</label><br>
>>>>>>> Stashed changes
                    
                </div>
            
                
                        <input type="Submit" value="Submit" class="submitBtn">

                    </form>



      
            </div>

        </body>
    <?php include 'Footer.php'?>
</html>
