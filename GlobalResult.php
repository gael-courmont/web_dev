<?php
    function getUserScoreForQuizz($user,$quizz){
        
    }
    if(isset($_POST['quizz_id'])){
        
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