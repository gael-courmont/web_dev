<body>
        <div class="container">
          <div class="loginForm">
            <h2>
              Login
            </h2>
          
            <form  action="index.php?page=connection"  method = "POST">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value="jhon" required><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value="dom" required><br><br>
                <label for="password">password:</label><br>
                <input type="password" id="password" name="password" value="123" required><br><br>
                <input type="submit" value="Submit">
            </form>
          </div>
        </div>
</body>
