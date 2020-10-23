<<<<<<< Updated upstream
=======

<?php include_once 'database.php';?>

>>>>>>> Stashed changes
<header>
    <a id="headertitle" href="home.php">Geo quizz</a>
    <nav>
    <div class="menuCategory">
        <a href="search.php">Contact<a/>
    </div>
<<<<<<< Updated upstream

    <div class="menuCategory">
        <span class="navtitle">Quizz</span>
        <div class="withSeveralLinks">
            <a href="capitale.php">
                capitale
            </a>
            <a href="musique.php">
                musique
            </a>
=======
    <div class="menuCategory">
        <a href="create_account.php">create_account<a/>
    </div>
    <div class="menuCategory">
        <span class="navtitle">Quizz</span>
        <div class="withSeveralLinks">
            <?php foreach(getAllQuizz() as $quizz){
                ?>
            <a href="<?php echo $quizz['quizz_name'];?>.php">
                <?php echo $quizz['quizz_name'];?>
                </a>
        <?php }?>
>>>>>>> Stashed changes
        </div>
    </div>
    </nav>
</header>