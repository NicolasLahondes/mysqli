<?php


// Declaire trainee to use all methods.
$trainees = new Trainees();
// Select one trainee
if (!empty($_GET) && empty($_GET['delete']) && !empty($_GET['id'])) {
    $trainees = Trainees::takeOneElement($bddConn, $_GET['id']);
}
require_once 'views/traineeModifyView.php';
