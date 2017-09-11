<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <div style="margin-right: auto; margin-left: auto; height: 50px; width: 200px; background-color: lightgrey; border: solid 2px #000; padding: 10px;">
            <h1 style="color: #010;">Blockbuster</h1>
        </div>
        <form action="auth.php" method="POST" style="border: solid 2px #00a8ff; margin-left: auto; margin-right: auto; height: 300px; width: 200px; padding: 10px;">
            <!-- log in -->
            <h3>Create Account</h3>            
            <label>Username: </label>    
            <br>
            <input type="text" name="username" />
            <br>
            <label>Password: </label>
            <br>            
			<input type="text" name="password" />
            <br>
			<!--
            <label>Re-type Password: </label>
            <br>
            <input type="text" name="rtpassword" />
            <br>
            <label>Email: </label>    
            <br>
            <input type="text" name="email" />
            <br>
			-->
            <br>
            <button type="submit" value="Submit">Login</button>			
        </form>			
    </body>
</html>