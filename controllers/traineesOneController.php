<?php

$trainees = Trainees::takeOneElement($bddConn, $_GET['id']);

require_once 'views/traineesOneView.php';
