<?php

$username = "bc65d9dbc465e8";
$password = "29be4308";
$hostname = "us-cdbr-iron-east-01.cleardb.net"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL\n";


//select a database to work with
$selected = mysql_select_db("heroku_7bd101fba9f910d",$dbhandle)
  or die("Could not select heroku_7bd101fba9f910d");
 echo "Nodakinz is sexy as fuck\n";

function add_waitlit($waitlist_key,$id) {
	}

function new_user($new_user_data,$var) {
	
}


add_waitlit(5,5);
new_user(1,$dbhandle);

?>