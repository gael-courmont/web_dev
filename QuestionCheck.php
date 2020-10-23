<?php
    include 'database.php';
    $QuizzName=$_GET['quizz'];
    $quizz=getQuizzByName($QuizzName);
    $quizzid=$quizz[0]['quizz_id'];
    $questiondata=getQuestionByQuizzId($quizzid);



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
        <h1>Vos réponses

        </h1>
        <?php foreach(getQuestionByQuizzId($quizzid) as $question){?>
            <p1 >
                <?php echo $question['question_title'];?>:
                <?php echo htmlspecialchars($_POST[$question['question_id']]);
                echo $question['question_id'];?>
                <?php 
                    $answer=isAnswerRight($question['question_id'])[0][0];
                    if ($answer==1){
                        echo("True");
                    }
                    else{
                        echo("False");
                    }
                ?>
                </br>
            </p1>
        <?php }?>
        </br>
    </body>
    <?php include 'Footer.php'?>
</html>