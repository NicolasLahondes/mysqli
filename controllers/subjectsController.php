<?php 

$sql = "SELECT * FROM subjects;";
$results = mysqli_query($conn, $sql);
$resultsCheck = mysqli_num_rows($results);


require_once 'views/subjectsView.php';