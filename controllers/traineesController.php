<?php

// Declaire trainee to use all methods.


// Declare instance for list all trainees
$arrayTrainees = Connexion::listAllTrainees($bddConn, "student", 200, 'Trainees', 'firstname', null, 'firstname', 'DESC');

// Add a trainee
if (!empty($_POST) && !empty($_POST['added'])) {
    $array = array('name' => $_POST['name'], 'firstname' => $_POST['firstname'], 'birthdate' => $_POST['birthdate']);
    var_dump($array);
    Connexion::addTrainee($bddConn, "student", $array);
    header('Location:index.php?action=eleves');
}

// Select one trainee
if (!empty($_GET) && empty($_GET['delete']) && !empty($_GET['id'])) {
    $trainees = Trainees::takeOneElement($bddConn, $_GET['id']);
}

// Modifying a trainee
if (!empty($_POST) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['birthdate']) && !empty($_POST['id'])) {
    var_dump($_POST);
    $array = array('nameEnt' => $_POST['name'], 'firstNameEnt' => $_POST['firstname'], 'birthdate' => $_POST['birthdate'], 'id' => $_POST['id']);
    var_dump($array);
    Connexion::modify($bddConn, $array);
    header('Location:index.php?action=eleves');
}

// Delete a trainee
if (!empty($_GET) && !empty($_GET['delete'])) {
    Connexion::deleteTrainee($bddConn, $_GET['id'], "student");
    header('Location:index.php?action=eleves');
}


include 'views/traineesView.php';
