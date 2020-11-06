<?php include_once 'database.php';
?>
<head>
        <title>Geoquizz</title>
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="common.css" />
</head>
<header>
    <a id="headertitle" href="index.php?page=home">Geo quizz</a>

    <nav>
    <div class="menuCategory">
        <a href="index.php?page=search">Contact<a/>
    </div>
    <div class="menuCategory">
        <a href="index.php?page=create_account">create_account<a/>
    </div>
    <div class="menuCategory">
        <span class="navtitle">Quizz</span>
        <div class="withSeveralLinks">
            <?php foreach(getAllQuizz() as $quizzheader){
                ?>
            <a href="index.php?page=quizz&quizzId=<?php echo $quizzheader['quizz_id'];?>&quizzName=<?php echo $quizzheader['quizz_name'];?>">
                <?php echo $quizzheader['quizz_name'];?>
                </a>
        <?php }?>
        </div>
    </div>
    </nav>
</header>