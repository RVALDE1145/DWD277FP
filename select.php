<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <div style="margin-right: auto; margin-left: auto; height: 50px; width: 200px; background-color: lightgrey; border: solid 2px #000; padding: 10px;">
            <h1 style="color: #010;">Blockbuster</h1>
        </div>
        <form action="selectmovie.php" method="POST" style="border: solid 2px #00a8ff; margin-left: auto; margin-right: auto; height: 300px; width: 200px; padding: 10px;">
            <!-- log in -->
            <h3>Select Genre</h3>		 
			  <input type="radio" name="00100" value="g1"> Comedy<br>
			  <input type="radio" name="00200" value="g2"> Romance<br>
			  <input type="radio" name="00120" value="g12"> Romantic-Comedy<br>
			  <input type="radio" name="00300" value="g3"> Horror<br>
			  <input type="radio" name="00340" value="g34"> Horror/Sci-fi<br>			 
            <br>            
            <br>
            <button type="submit" value="Submit">Login</button>			
        </form>			
    </body>
</html>