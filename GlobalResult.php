<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="common.css" />
<?php

    function getUserScoreForQuizz($user,$quizz){

    }
    if(isset($_POST['quizz_id'])){
        $quizz_id=$_POST['quizz_id'];
        $user_list=getAllUserForQuizzid($quizz_id);
        $numbergoodAnswer=count(getAllGoodAnswerByQuizzId($quizz_id));
        ?>
        <body>
            <dic class="container">
            <?php
            foreach ($user_list as $user){
                $user_score=count(getGoodAnswerbyUserIDandquizz($user[0],$quizz_id));?>
                <div class="card" >
                    <div class="container">
                        <p1><?php echo($user_score);?> / <?php echo($numbergoodAnswer);?></p1>
                        <h4></b><?php echo($user[1]); ?> <?php echo($user[2]); ?></br><h4>
                    </div>
                </div>   
            <?php }
            ?>
            </div>
        </body>
        <?php
    }
    else{?>
    <body>
        <form action="index.php?page=GlobalResult" method="POST">
            <label for="quizz select">Choose a quizz</label>
                <select name="quizz_id" id="quizz_id">
                    <?php foreach(getAllQuizz() as $quizz){?>
                        <option value=<?php echo($quizz[0]);?> > <?php echo($quizz[1]);?> </option>
                    <?php }?>
                </select>
            <input type="Submit" value="Submit" class="submitBtn">
        </form>

    </body>
<?php }?>