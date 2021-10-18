<?php

$trainees = new Trainees();
$trainees = $trainees->takeOneElement($bddConn, $_GET['id']);

require_once 'views/traineesOneView.php';

