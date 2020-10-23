<?php
    include 'database.php';
    $QuizzName=$_GET['quizz'];
    $quizz=getQuizzByName($QuizzName);
    $quizzid=$quizz[0]['quizz_id'];
    $questiondata=getQuestionByQuizzId($quizzid);
<<<<<<< Updated upstream
<<<<<<< Updated upstream

=======
    $compteurBonneRep=0;
    $Nombre_question=count($questiondata);
>>>>>>> Stashed changes
=======
    $compteurBonneRep=0;
    $Nombre_question=count($questiondata);
>>>>>>> Stashed changes


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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                <?php echo htmlspecialchars($_POST[$question['question_id']]);
                echo $question['question_id'];?>
                <?php 
                    $answer=isAnswerRight($question['question_id'])[0][0];
                    if ($answer==1){
                        echo("True");
=======
=======
>>>>>>> Stashed changes
                <?php echo htmlspecialchars($_POST[$question['question_id']]);?>
                <?php 
                    $answer=isAnswerRight($question['question_id'])[0][0];
                    if ($answer==$_POST[$question['question_id']]){
                        echo("True");
                        $compteurBonneRep++;
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                    }
                    else{
                        echo("False");
                    }
                ?>
                </br>
            </p1>
        <?php }?>
        </br>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
        <h1>
        Vous aves <?php echo $compteurBonneRep?> Point sur <?php echo $Nombre_question ?>
        </h1>
>>>>>>> Stashed changes
=======
        <h1>
        Vous aves <?php echo $compteurBonneRep?> Point sur <?php echo $Nombre_question ?>
        </h1>
>>>>>>> Stashed changes
    </body>
    <?php include 'Footer.php'?>
</html>