<?php
/*
 PHP script to import MYSQL database dump in Heroku cleardb
 By Shayan Eskandari 2015
 
 export your mysql dump from phpmyadmin or with sqldump commandline -> database_scheme.sql
 you have to modify the dump and remove the create database and schema details
 here is one example

//database_schema.sql

CREATE TABLE `table`(`column1` varchar(50) NOT NULL,`column2` varchar(10) NOT NULL,`column3` varchar(70) NOT NULL,`column4` varchar(50) NOT NULL,`column5` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP);

*/

function connectDB_heroku()
{
	$url = parse_url("mysql://b631ae272af226:029be58b@us-cdbr-iron-east-05.cleardb.net/heroku_f0d989455534342?reconnect=true");

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);

	$conn = new mysqli($server, $username, $password, $db);
	if(mysqli_connect_errno())
	{
		echo mysqli_connect_error();
	}

	return $conn;
}



function runDbQuery($query)
{
	$conn = connectDB_heroku();
	$result = $conn->query($query);
	
	if ($debug_flag >= 1)
	{
		file_put_contents($GLOBALS['errorfile'], "DBquery= " . $query . "\n", FILE_APPEND | LOCK_EX);
	}
	if (!$result) 
	{
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysqli_error($conn);
	    file_put_contents($GLOBALS['errorfile'], $GLOBALS['current_date'] . " DB Error= ". mysqli_error($conn) ." DBquery= " . $query . "\n", FILE_APPEND | LOCK_EX);
	    exit;
	}
	//mysql_free_result($result);
	//$dbResponse = $result;
	return ($result);	

}


$all_lines = file("votesmart.sql", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

foreach($all_lines as $query) {
	echo $query;
    if(substr($query, 0, 2) == "--") {
        continue;
    }

    runDbQuery($query);
}

?>
