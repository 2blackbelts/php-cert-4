<?php 
	$title = ': Display Journal Entries';     
	require('../includes/incHeader.php');
	require_once('../includes/connect.php');	 // connect to database
?> 
<h2>Journal Entries so far...</h2>
<p>
<?php
	// make the SQL query
	$sql = 'SELECT journalID, jDateTime, jHeading, jDetail FROM journal ORDER BY jDatetime'; 

	// prepare (bubble wrap)
	$stmt = $db->prepare($sql);
  
	// execute (run the query)
	$stmt->execute();

	// Bind (collect the result from the database)
	$stmt->bind_result($id, $date, $heading, $detail);

	// loop through results
	while($stmt->fetch()) {
		print '<strong> #' . $id . ' ' . $heading . '</strong> ';
		print $date . '<br>';
		print $detail . '<br><br>';
		// print "End of this result <br>";
	}

	// close db
	$stmt->close();
?>
</p>
<?php 
	require('../includes/incFooter.php');	
?> 