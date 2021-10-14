<?php

include 'models/trainees.php';

// set the $results variable with query results from bdd

$trainees = new Trainees();

$aTrainees = $trainees->listAllTrainees($bddConn);


// $trainee = $trainees->takeOneElement($bddConn, );

include 'views/traineesView.php';

