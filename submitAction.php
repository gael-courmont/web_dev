<html>
<head>
<link rel="stylesheet" href="main.css">
        <?php include 'header.php'?>
    </head>

    <?php 


if (isset($_POST["value"]))
{
    $value = $_POST["value"];
} else {
    $value = "";
}


if (isset($_POST["vehicle1"]))
{
    $vehicle1 = $_POST["vehicle1"];
} else {
    $vehicle1 = "";
}


if (isset($_POST["vehicle2"]))
{
    $vehicle2 = $_POST["vehicle2"];
} else {
    $vehicle2 = "";
}


if (isset($_POST["vehicle3"]))
{
    $vehicle3 = $_POST["vehicle3"];
} else {
    $vehicle3 = "";
}


     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websitequiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, answer FROM answer";
$result = $conn->query($sql);

$counter=0;
 while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - answer: " . $row["answer"].  "<br>";
   
    if ($row["id"]==1 and $row["answer"]== $value  ) {
        $counter++;
    }

    if ($row["id"]==2 and $row["answer"]== "$vehicle1$vehicle2"  ) {
        $counter++;
    }

   }
   echo "<div class='resultOfQuiz'><h1 > you got $counter/2 </h1> <br>";
   echo "<h2>good luck</h2></div>";

     
$conn->close();

   
    

    ?>

<?php include 'Footer.php'?>

</html>
