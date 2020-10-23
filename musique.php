<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
<?php include 'database.php';
    
    $questiondata=getQuestionByQuizzId(2);
=======
<?php include 'database.php';
    $quizz=getQuizzByName('musique');
    $questiondata=getQuestionByQuizzId($quizz[0][0]);
>>>>>>> Stashed changes
=======
<?php include 'database.php';
    $quizz=getQuizzByName('musique');
    $questiondata=getQuestionByQuizzId($quizz[0][0]);
>>>>>>> Stashed changes

?>



<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
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
<<<<<<< Updated upstream
                <div class="quesFrame" >
                    <p style="font-size: 22;">what is 3*3 ?</p>
                    <form action="submitAction.php"  method = "POST">
                        <input type="radio" name="value" value="9"> 9<br>
                        <input type="radio" name="value" value="6"> 6<br>
                        <input type="radio" name="value" value="3"> 3
=======
                <div class="quesFrame" >'
                    <p style="font-size: 22;"><?php echo($questiondata[0][1]);?></p>
                    <form action="QuestionCheck.php?quizz=musique"  method = "POST">
                        <input type="radio" name=<?php echo $questiondata[0][0];?> value="human after all">human after all<br>
                        <input type="radio" name=<?php echo $questiondata[0][0];?> alue="alive"> alive<br>
                        <input type="radio" name=<?php echo $questiondata[0][0];?> value="random access memories"> random access memories
>>>>>>> Stashed changes
                   
                </div>

                <div class="quesFrame">
<<<<<<< Updated upstream
                    <p style="font-size: 22;">what do you have ?</p>
                    
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="bike">
                        <label for="vehicle1"> I have a bike</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="car">
                        <label for="vehicle2"> I have a car</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> I have a boat</label><br>
=======
                    <p style="font-size: 22;"><?php echo($questiondata[1][1]);?></p>
                    
                        <input type="checkbox" id="a2" name=<?php echo $questiondata[1][0];?> value="angus young">
                        <label for="a1"> angus young</label><br>
                        <input type="checkbox" id="a2" name=<?php echo $questiondata[1][0];?> value="jimmy page">
                        <label for="a2"> jimmy page</label><br>
                        <input type="checkbox" id="a2" name=<?php echo $questiondata[1][0];?> value="eddie van halen">
                        <label for="a3"> eddie van halen</label><br>
>>>>>>> Stashed changes
                    
                </div>
            
                
                        <input type="Submit" value="Submit" class="submitBtn">

                    </form>

<<<<<<< Updated upstream
      
            </div>
=======


      
            </div>
            <div>
            <?php 
            for ($i=0 ; $i<count($questiondata) ; $i=$i+1){
                echo($questiondata[$i][1]);
            }
             ?>
            </div>
>>>>>>> Stashed changes
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



      
            </div>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

        </body>
    <?php include 'Footer.php'?>
</html>
