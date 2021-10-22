<?php

// Wait for in order (
//''PDO Connexion'',
//''table'',
//''number of results'',
//''name of the class'', 
//''where to target'', 
//''what to target'', 
//''sort order'', 
//''asc or desc''
// )

var_dump($_POST);
$arrayTeacher = Teachers::listTeachers($bddConn, "trainer", "", 'Teachers', '', '', '', '');

if (!empty($_POST) && !empty($_POST['added'])) {
    $array = array('name' => $_POST['name'], 'firstname' => $_POST['firstname']);
    var_dump($array);
    Teachers::addTeacher($bddConn, "trainer", $array);
    header('Location:index.php?action=teachers');
}

require_once 'views/teachersView.php';
