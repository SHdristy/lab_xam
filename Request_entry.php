<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$missed_course = $_GET["missed_course"];
    




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO request_makeup  VALUES ( '', '$id', '$name' , '$missed_course' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> id = $id <br> name = $name <br> $missed_course = missed_course";



	echo "<p><a href=index.php>READ all records</a>";

?>