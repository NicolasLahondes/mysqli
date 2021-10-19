<?php

// Declaire trainee to use all methods.


// Declare instance for list all trainees
$arrayTrainees = Connexion::listAllTrainees($bddConn, "student", 15, 'Trainees', 'firstname', null, 'firstname','ASC');

// Add a trainee
if (!empty($_POST) && !empty($_POST['added'])) {
    Connexion::addTrainee($bddConn, $_POST['name'], $_POST['firstname'], $_POST['birthdate'], "student");
}

// Select one trainee
if (!empty($_GET) && empty($_GET['delete']) && !empty($_GET['id'])) {
    $trainees = Trainees::takeOneElement($bddConn, $_GET['id']);
}

// Modifying a trainee
if (!empty($_POST) && !empty($_POST['name'])) {
    Trainees::modify($bddConn, $_POST['name'], $_POST['firstname'], $_POST['birthdate'], $_POST['id']);
    header('Location:index.php?action=eleves');
}

// Delete a trainee
if (!empty($_GET) && !empty($_GET['delete'])) {
    Trainees::deleteTrainee($bddConn, $_GET['id']);
    header('Location:index.php?action=eleves');
}


include 'views/traineesView.php';
