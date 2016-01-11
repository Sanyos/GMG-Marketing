<?php 

//mysql connection
$conn = mysql_connect("localhost", "root", "");  // set database source 
if (!$conn) {
    die("Could not connect: " . mysql_error());
}
$db_selected = mysql_select_db('test', $conn);  //select database
if (!$db_selected) {
    die ('Can\'t use the selected database : ' . mysql_error());
}

// database query preparation	
$query=sprintf(' SELECT statistic.day, statistic.amount  FROM statistic LEFT JOIN user ON user.id = statistic.banner_id WHERE user.email = "modulebugbear@randomthings.com" ORDER BY statistic.day DESC ');

// run
$result = mysql_query($query);  

//error handling
if (!$result) {    
    $message  = "Invalid query: " . mysql_error() . "\n";
    $message .= "Whole query: " . $query;
    die($message);
}

