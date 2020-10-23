<!DOCTYPE html>
<html>
    <head>
        <title>Geoquizz</title>
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="common.css" />
    </head>
    <?php include 'header.php'?>
    <body>
            <div class="header">
                <h1 id="title">Quiz #1</h1>
            </div>

            <div>
                <div class="quesFrame" >
                    <p style="font-size: 22;">what is 3*3 ?</p>
                    <form action="submitAction.php"  method = "POST">
                        <input type="radio" name="value" value="9"> 9<br>
                        <input type="radio" name="value" value="6"> 6<br>
                        <input type="radio" name="value" value="3"> 3
                   
                </div>

                <div class="quesFrame">
                    <p style="font-size: 22;">what do you have ?</p>
                    
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="bike">
                        <label for="vehicle1"> I have a bike</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="car">
                        <label for="vehicle2"> I have a car</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> I have a boat</label><br>
                    
                </div>
            
                
                        <input type="Submit" value="Submit" class="submitBtn">

                    </form>

      
            </div>

        </body>
    <?php include 'Footer.php'?>
</html>
