

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

    <?php if(!isset($_SESSION['loggedIn'])) { ?>
        <div class="menuCategory">
            <a href="index.php?page=create_account">create_account<a/>
        </div>
        <div class="menuCategory">
        <a href="index.php?page=login">Login<a/>
        </div>
    <?php } ?>

    
    <div class="menuCategory">

    <?php    
        if (isset($_SESSION['loggedIn'])) { ?>
        <span class="navtitle">Quizz</span>
        <div class="withSeveralLinks">
        
        <?php
            foreach(getAllQuizz() as $quizzheader){
                ?>
            <a href="index.php?page=quizz&quizzId=<?php echo $quizzheader['quizz_id'];?>&quizzName=<?php echo $quizzheader['quizz_name'];?>">
                <?php echo $quizzheader['quizz_name'];?>
                </a>
        <?php }}?>

        </div>
    </div>

<?php if (isset($_SESSION['loggedIn'])){ ?>
    <div class="menuCategory">
            <a href="index.php?page=disconnect" >
                Disconnect
                </a>
        </div>
    <div class="menuCategory">
        <a href="index.php?page=personalresult" >
            Your Result
        </a>
    </div>
<?php } ?>

<?php if (isset($_SESSION['loggedIn'])){ ?>
        <div class="loginCategory">
            <p1>
                Connected as <?php echo $_SESSION['fname'];?> 
                <?php echo $_SESSION['lname'];?>
            </p1>
        </div>
        
<?php } ?>

    </nav>
</header>

