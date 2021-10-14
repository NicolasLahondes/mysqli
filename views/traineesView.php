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
    <form action="index.php?action=eleves" method="post">
        <label for="name" name="name"></label>
        <input type="text" id="name" name="name" placeholder="name">
        <label for="firstname" name="firstname"></label>
        <input type="text" id="firstname" name="firstname" placeholder="firstname">
        <label for="birthdate" name="birthdate"></label>
        <input type="text" id="birthdate" name="birthdate" placeholder="birthdate">
        <input type="submit" value="Ajouter">
    </form>
    <!-- <h3>Je suis <?php
                        // foreach ($queryMe as $row) :
                        echo $queryParse['name'] . " " . $queryParse['firstname'];
                        // endforeach; 
                        ?></h3> -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultsCheck > 0) :
                    foreach ($results as $row) : ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><?php echo $row['birthdate'] ?></td>
                        </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>
    </div>


</body>

</html>