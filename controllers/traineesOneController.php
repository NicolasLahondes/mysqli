<?php
require_once 'models/trainees.php';
$trainees = new Trainees();

$aTrainees = $trainees->listAllTrainees($bddConn);


require_once 'views/traineesOneView.php';

