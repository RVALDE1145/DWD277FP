<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
    // check username			
    if (isset($_POST['username'])) {
        $un = $_POST['username'];				
        } else {
            echo "Please Input Username <br>";                
        };
    // check password
    if (isset($_POST['password'])) {
        $pw = $_POST['password'];				
        } else {
            echo "Please Input Password <br>";                
        };  
    //if (isset($_POST['email'])) {
    //    $em = $_POST['email'];				
    //    } else {
    //        echo "Please Input Email <br>";                
    //    };
    //if (isset($_POST['rtpassword'])) {
    //    $rtpw = $_POST['rtpassword'];				
    //    } else {
    //        echo "Please Re-type Password <br>";                
    //    };
    //    if ($pw == $rtpw){
    //            echo "Username set <br>";
    //            echo "Passwords Match <br>";
    //            echo "auth complete <br>";

    //   }		
		
		require ('../mysqli_connect.php'); // connect to db
		
		// check user exists
		$q = "SELECT username FROM UserAcct_T WHERE (username='$un' AND password='$pw')";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { // Match was made.
	
			// Get the user
			$row = mysqli_fetch_array($r, MYSQLI_NUM);	

			// q that checks users in db			
			
			if (mysqli_affected_rows($dbc) == 1) {

				// success
				echo '<h1>Thank you!</h1>
				<p>Login Successful</p><p><br /></p><br>
				<a href="file:///C:/Users/RVALDE1145/Desktop/FinalProject_DWD277/root/select.php">Click Link</a>';	

			} else { // If it did not run OK.

				// fail
				echo '<h1>System Error</h1>
				<p>User not found</p>'; 		
	
			}

			mysqli_close($dbc); // Close the database connection.
    }
}
  ?>

