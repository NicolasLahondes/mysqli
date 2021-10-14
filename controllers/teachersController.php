<?php

$sql = "SELECT * FROM trainer;";
$results = mysqli_query($conn, $sql);
$resultsCheck = mysqli_num_rows($results);


require_once 'views/teachersView.php';
