<?php
require_once 'models/trainees.php';

$trainees = new Trainees();
$trainees->takeOneElement($bddConn, $_GET['id']);

require_once 'views/traineesOneView.php';

