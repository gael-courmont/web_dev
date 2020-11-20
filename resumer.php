<?php
    $user=getUserByName($_SESSION['fname'],$_SESSION['lname']);
    $user_id=$user[0][0];
    $quizzDone=getAllQuizzDone($user_id);
    //$goodAnswer=getGoodAnswerbyUserIDandquizz($user_id,$quizz_id);
?>
<body >
    <div >
        <h1>voici vos résultat:</h1>
    </div>
    <?php foreach($quizzDone as $quizz){
        $goodAnswerUser=getGoodAnswerbyUserIDandquizz($user_id,$quizz[0]);
        $totalGoodAnswer=getAllGoodAnswerByQuizzId($quizz[0]);?>
            <div>
                <p1>Quizz: <?php echo $quizz[1]?> </p1>
                </br>
                <p1>Résultat: <?php echo (count($goodAnswerUser));?> / <?php echo(count($totalGoodAnswer));?></p1>
                <p1> supprimer le quizz</p1>
            </div>
    <?php } ?>
</body>
