
<?php 
if(isset($_SESSION['loggedIn']))
    {   
        $QuizzId=$_GET['quizzId'];
        $QuizzName=$_GET['quizzName'];
        $questiondata=getQuestionByQuizzId($QuizzId);
        $user=getUserByName($_SESSION["fname"],$_SESSION["lname"]);
        $quizzdone=getQuizzbyUseranswerid($user[0][0]);
        foreach($quizzdone as $quizzDoneName){
            if($quizzDoneName[0]==$QuizzName){

                header('Location: index.php?page=resumer&quizz='.$QuizzName);
            }    
        }
        ?>
            <body>
                <div class="header">
                    <h1 id="title"> Sujet:<?php echo $QuizzName?></h1>
                </div>

                <div>
                    <form action="index.php?page=QuestionCheck&quizz=
                    <?php echo $QuizzName?>&quizzId=
                    <?php echo $QuizzId?>"  method = "POST">
                        <?php foreach($questiondata as $question){?>
                        <?php $inputtype=$question[3];?>
                        <div class="quesFrame" >
                        <p style="font-size: 22;"><?php echo $question[1]?> ?</p>
                        
                        <?php 
                        if($inputtype=='select'){ ?>
                            <select id=<?php echo $question[0].'[]';?> 
                            name=<?php echo $question[0].'[]';?> >
                            <?php
                            foreach(getAnswerQuestionID($question[0]) as $answer){?>
                                <option value=<?php echo $answer[0];?> > <?php echo $answer[1];?>
                            </option>
                            <?php }?>
                            </select>
                            <?php

                            }
                        else if ($inputtype=='string'){ ?>
                            <input type='string' name=<?php echo $question[0].'[]';?> value="">
                        <?php 
                        } 
                        else {foreach(getAnswerQuestionID($question[0]) as $answer){?>
                            <input type=<?php echo $inputtype;?> name=<?php echo $question[0].'[]';?>
                            value=<?php echo $answer[0];?> > 
                            <?php  echo $answer[1]; ?><br>
                            <?php }?>                      
                            <?php } ?>
                        </div>
                        
                        <?php } ?>
                            <input type="Submit" value="Submit" class="submitBtn">
                        </form>
                    </div>
            </body>
    <?php 
    }
else {
    header ('Location: index.php?page=login');
}
?>