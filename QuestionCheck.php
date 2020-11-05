<?php
    $QuizzName=$_GET['quizz'];
    $quizz=getQuizzByName($QuizzName);
    $quizzid=$quizz[0]['quizz_id'];
    $questiondata=getQuestionByQuizzId($quizzid);
    $compteurBonneRep=0;
    $Nombre_question=count($questiondata);


?>




<!DOCTYPE html>
<html>
    <body>
        <h1>Your answer

        </h1>
        <?php foreach(getQuestionByQuizzId($quizzid) as $question){?>
            <p1 >
                <?php echo $question['question_title'];?>:
                <?php 
                    $answer=isAnswerRight($question['question_id'])[0][0];
                    $clientanswer=$_POST[$question['question_id']];
                    if (is_numeric($clientanswer)==FALSE){
                        if ($clientanswer==getAnswernamebyid($answer)[0][0]){
                            echo("True");
                            $compteurBonneRep++;
                        }
                        else{
                            echo("False");
                        }
                    }
                    elseif ($answer==$clientanswer){
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
        you got <?php echo $compteurBonneRep?> out of <?php echo $Nombre_question ?>
        </h1>
    </body>
</html>