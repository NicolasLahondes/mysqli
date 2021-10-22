<?php
// List all trainees
// Wait for in order (PDO Connexion, table, number of results, name of the class, where to change, what to change, sort order, asc or desc )
$arrayTrainees = Trainees::listAllTrainees($bddConn, "student", "", 'Trainees', 'firstname', '', 'id', '');

// Add a trainee
if (!empty($_POST) && !empty($_POST['added'])) {
    $array = array('name' => $_POST['name'], 'firstname' => $_POST['firstname'], 'birthdate' => $_POST['birthdate']);
    var_dump($array);
    Trainees::addTrainee($bddConn, "student", $array);
    header('Location:index.php?action=eleves');
}

// Select one trainee
if (!empty($_GET) && empty($_GET['delete']) && !empty($_GET['id'])) {
    $trainees =  Trainees::takeOneTrainee($bddConn, $_GET['id']);
}

// Modifying a trainee
if (!empty($_POST) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['birthdate']) && !empty($_POST['id'])) {
    var_dump($_POST);
    $array = array('nameEnt' => $_POST['name'], 'firstNameEnt' => $_POST['firstname'], 'birthdate' => $_POST['birthdate'], 'id' => $_POST['id']);
    var_dump($array);
    Trainees::modifyTrainee($bddConn, $array);
    header('Location:index.php?action=eleves');
}

// Delete a trainee
if (!empty($_GET) && !empty($_GET['delete'])) {
    Trainees::deleteTrainee($bddConn, $_GET['id'], "student");
    header('Location:index.php?action=eleves');
}

include 'views/traineesView.php';
