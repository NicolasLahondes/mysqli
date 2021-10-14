<?php

include 'models/trainees.php';


// $selectMe = "SELECT * FROM student WHERE name LIKE '%LAHONDES%'";
// $queryMe = mysqli_query($conn, $selectMe);
// $queryParse = $queryMe->fetch_assoc();

var_dump($_POST);

// Add

if (!empty($_POST) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['birthdate'])) {
    $addMarc = "INSERT INTO student (name, firstname, birthdate) VALUES ('" . $_POST['name'] . "','" . $_POST['firstname'] . "','" . $_POST['birthdate'] . "')";

    if (mysqli_query($conn, $addMarc)) {
        echo "Records inserted successfully.";
        header("Location:index.php?action=eleves");
    } else {
        echo "ERROR: Could not able to execute $addMarc. " . mysqli_error($conn);
    }
}



// Delete
// $remove = "DELETE FROM student WHERE firstname LIKE '%marc%'";

// if (mysqli_query($conn, $remove)) {
//     echo "Records inserted successfully.";
// } else {
//     echo "ERROR: Could not able to execute $remove. " . mysqli_error($conn);
// }


// Update
// $update = "UPDATE student SET name = 'Remplacement', firstname = 'de Remplacement Village', birthdate = '1045-10-12' WHERE firstname LIKE '%marc%'";

// if (mysqli_query($conn, $update)) {
//     echo "Records inserted successfully.";
// } else {
//     echo "ERROR: Could not execute $update. " . mysqli_error($conn);
// }



// Display all requests
$sql = "SELECT * FROM student";
$results = mysqli_query($conn, $sql);
$resultsCheck = mysqli_num_rows($results);

include 'views/traineesView.php';
