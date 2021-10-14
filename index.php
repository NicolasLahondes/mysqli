<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php?action=eleves"><button>Elèves</button></a>
    <a href="index.php?action=teachers"><button>Professeurs</button></a>
    <a href="index.php?action=subjects"><button>Matières</button></a>
</body>

</html>

<?php

include 'dataBase/dataConnexion.php';

if (!empty($_GET['action'])) {
    switch ($_GET['action']) {

        case "eleves":
            include "controllers/traineesController.php";
            break;

        case "elevesOne":
            include "controllers/traineesOneController.php";
            break;

        case "teachers":
            include "controllers/teachersController.php";
            break;

        case "subjects":
            include "controllers/subjectsController.php";
            break;
    }
}

?>