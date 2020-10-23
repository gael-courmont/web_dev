<?php
    include 'database.php';
    $QuizzName=$_GET['quizz'];
    $quizz=getQuizzByName($QuizzName);
    $quizzid=$quizz[0]['quizz_id'];
    $questiondata=getQuestionByQuizzId($quizzid);
    $compteurBonneRep=0;
    $Nombre_question=count($questiondata);


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
                <?php 
                    $answer=isAnswerRight($question['question_id'])[0][0];
                    $clientanswer=$_POST[$question['question_id']];
                    if (is_numeric($clientanswer)==FALSE){
                        $clientanswer=getAnswerIDbyname($clientanswer)[0][0];
                    }
                    if ($answer==$clientanswer){
                        echo("True");
                        $compteurBonneRep++;
                    }
                    else{
                        echo("False");
                    }
                ?>
                </br>
            </p1>
        <?php }?>
        </br>
        <h1>
        Vous avez <?php echo $compteurBonneRep?> Point sur <?php echo $Nombre_question ?>
        </h1>
    </body>
    <?php include 'Footer.php'?>
</html>