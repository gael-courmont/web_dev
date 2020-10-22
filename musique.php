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
                <div class="quesFrame" >'
                    <p style="font-size: 22;">what's the name of the daft punk last album</p>
                    <form action="submitAction.php"  method = "POST">
                        <input type="radio" name="value" value="male"> paris<br>
                        <input type="radio" name="value" value="female"> londres<br>
                        <input type="radio" name="value" value="other"> madrid
                   
                </div>

                <div class="quesFrame">
                    <p style="font-size: 22;">type the name of acdc guitarist</p>
                    
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> paris</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> londres</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> barcelone</label><br>
                    
                </div>
            
                
                        <input type="Submit" value="Submit" class="submitBtn">

                    </form>



      
            </div>

        </body>
    <?php include 'Footer.php'?>
</html>
