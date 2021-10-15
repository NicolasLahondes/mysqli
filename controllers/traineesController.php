<?php

include 'models/trainees.php';

// set the $results variable with query results from bdd

$trainees = new Trainees();

// $aTrainees = $trainees->listAllTrainees($bddConn);
$arrayTrainees = $trainees->listAllTrainees($bddConn);


// var_dump($_POST);

if (!empty($_POST)) {
    $trainees->modify($bddConn, $_POST['name'], $_POST['firstname'], $_POST['birthdate'], $_POST['id']);
    header('Location:index.php?action=eleves');
}
// $trainee = $trainees->takeOneElement($bddConn, );

include 'views/traineesView.php';
