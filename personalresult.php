<?php
    $user=getUserByName($_SESSION['fname'],$_SESSION['lname']);
    $user_id=$user[0][0];
    if(isset($_POST['delete'])){
        $quizz_id_delete=$_POST['delete'];
        deleteUserAnswerByQuizzIdandUserId($quizz_id_delete,$user_id);
    }
    $quizzDone=getAllQuizzDone($user_id);
    //$goodAnswer=getGoodAnswerbyUserIDandquizz($user_id,$quizz_id);
?>
<body >
<div class="container results">
    <div >
        <h1>here are your result:</h1>
    </div>
    <?php foreach($quizzDone as $quizz){
        $goodAnswerUser=getGoodAnswerbyUserIDandquizz($user_id,$quizz[0]);
        $totalGoodAnswer=getAllGoodAnswerByQuizzId($quizz[0]);?>
            <div>
                <p1>Quizz: <?php echo $quizz[1]?> </p1>
                </br>
                <p1>Résul: <?php echo (count($goodAnswerUser));?> / <?php echo(count($totalGoodAnswer));?></p1>
                <form action="index.php?page=personalresult" method = "POST">
                    <input type="hidden" name="delete" value=<?php echo ($quizz[0]);?> required>
                    <input type="submit" value="Delete answer">
                </form>
            </div>
    <?php } ?>
</div>
</body>
