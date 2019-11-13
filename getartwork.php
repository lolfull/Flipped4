<?php
	$whichMus = $_POST["pickamuseum"];
	$query = "SELECT * FROM workofart WHERE whichmus='" . $whichMus . "';";
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while($row = mysqli_fetch_assoc($result)){
	echo "<li>";
	echo $row["artname"] . " BY " . $row["artist"];
	echo "</li>";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?> 
