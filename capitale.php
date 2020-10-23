<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
<?php include 'database.php';
    $quizz=getQuizzByName('capitale');
    $questiondata=getQuestionByQuizzId($quizz[0][0]);

?>



<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
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
=======
=======
>>>>>>> Stashed changes
                <h1 id="title"> Sujet:<?php echo $quizz[0][1]?></h1>
            </div>

            <div>
                <form action="QuestionCheck.php?quizz=<?php echo $quizz[0][1]?>"  method = "POST">
                    <?php foreach($questiondata as $question){?>
                        <div class="quesFrame" >
                            <p style="font-size: 22;"><?php echo $question[1]?></p>
                                <?php foreach(getAnswerQuestionID($question[0]) as $answer){?>
                                    <input type="checkbox" name=<?php echo $question[0]?> value=<?php echo $answer[0]?> > <?php echo $answer[0]?><br>
                                <?php }?>
                        
                        </div>                      
                    <?php }?>
                    <input type="Submit" value="Submit" class="submitBtn">
                </form>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes



      
            </div>

        </body>
    <?php include 'Footer.php'?>
</html>
