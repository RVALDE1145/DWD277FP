<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
	require ('../mysqli_connect.php'); // connect to db
			
	$g = $_POST['name'];
	$q = "SELECT movieTitle FROM Movie_T WHERE $g=genreID;";		
	$r = @mysqli_query ($dbc, $q); 

	// Count the number of returned rows
	$num = mysqli_num_rows($r);

	if ($num > 0) { // if succ, show results

		
		echo "<p>There are currently $num movies under Genre.</p>\n";
		
		// get and print results
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
			echo '<tr><td align="left">' . $g . '</td><td align="left">' . '</td></tr>
			';
		}
		
		mysqli_free_result ($r);

	} else { // if no results

		echo '<p class="error">There are currently no movies.</p>';

	}

	mysqli_close($dbc); // Close the database connection.

}