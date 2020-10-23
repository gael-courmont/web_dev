<?php include 'database.php';
    $quizz=getQuizzByName('capitale');
    $questiondata=getQuestionByQuizzId($quizz[0][0]);

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
            <div class="header">
                <h1 id="title"> Sujet:<?php echo $quizz[0][1]?></h1>
            </div>

            <div>
                <form action="QuestionCheck.php?quizz=<?php echo $quizz[0][1]?>"  method = "POST">
                    <?php foreach($questiondata as $question){?>
                        <div class="quesFrame" >
                            <p style="font-size: 22;"><?php echo $question[1]?></p>
                                <?php foreach(getAnswerQuestionID($question[0]) as $answer){?>
                                    <input type="checkbox" name=<?php echo $question[0]?> value=<?php echo $answer[0]?> > <?php echo $answer[1]?><br>
                                <?php }?>
                        
                        </div>                      
                    <?php }?>
                    <input type="Submit" value="Submit" class="submitBtn">
                </form>



      
            </div>

        </body>
    <?php include 'Footer.php'?>
</html>
