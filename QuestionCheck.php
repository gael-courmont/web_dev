<?php

    $QuizzName=$_GET['quizz'];
    $quizzid=$_GET['quizzId'];
    $questiondata=getQuestionByQuizzId($quizzid);
    $compteurBonneRep=0;
    $Nombre_question=count($questiondata);
    $Nombre_reponse=0;
    $TextAnswer;
    $answer_number=0;
?>




    <body>
        <h1>Your answer

        </h1>
        <?php foreach(getQuestionByQuizzId($quizzid) as $question){?>
            <p1 >
                <?php echo $question['question_title'].' ';?>:
                <?php 
                    $answer=isAnswerRight($question['question_id']);
                    foreach( ($_POST[$question['question_id']]) as $clientanswer){
                    $answer_number++;
                    $Nombre_reponse++;
                    for ($i=0;$i<count($answer);$i++){
                        $good_answer=$answer[$i][0];
                    if (is_numeric($clientanswer)==FALSE){
                        $good_answer=$good_answer;
                        if ($clientanswer==getAnswernamebyid($good_answer)[0][0]){
                            $TextAnswer='true';
                            $compteurBonneRep++;
                        break;
                        }
                        else{
                            $TextAnswer='false';
                        }
                    }
                    elseif ($good_answer==$clientanswer){
                        $TextAnswer='true';
                        $compteurBonneRep++;
                        break;
                    }
                    else{
                        $TextAnswer='false';
                    }}
                echo ('Your answer number '.$answer_number." is ".$TextAnswer);                
                }
                $answer_number=0;
                ?>
                </br>
            </p1>
        <?php }?>
        </br>
        <h1>
        you got <?php echo $compteurBonneRep?> out of <?php echo $Nombre_reponse ?>
        </h1>
    </body>