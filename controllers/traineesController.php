<?php

include 'models/trainees.php';



$results = $bddConn->query("SELECT * from student");

$fetchedResults = $results->fetchAll();

var_dump($fetchedResults);

include 'views/traineesView.php';
