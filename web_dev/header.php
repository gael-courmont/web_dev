
<?php include_once 'database.php';?>

<header>
    <a id="headertitle" href="home.php">Geo quizz</a>
    <nav>
    <div class="menuCategory">
        <a href="search.php">Contact<a/>
    </div>
    <div class="menuCategory">
        <a href="create_account.php">create_account<a/>
    </div>
    <div class="menuCategory">
        <span class="navtitle">Quizz</span>
        <div class="withSeveralLinks">
            <?php foreach(getAllQuizz() as $quizzheader){
                ?>
            <a href="<?php echo $quizzheader['quizz_name'];?>.php">
                <?php echo $quizzheader['quizz_name'];?>
                </a>
        <?php }?>
        </div>
    </div>
    </nav>
</header>