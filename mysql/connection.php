<?php

//Set up the database access credentials

$hostname = 'stu-db.aet.leedsbeckett.ac.uk';

$username = 'c3609527'; //your standard uni id

$password = 'MyDB18311185'; // the password found on the W: drive

$databaseName = 'Customer'; //the name of the db you are using on phpMyAdmin

$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");


