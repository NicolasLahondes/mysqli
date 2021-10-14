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
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Déscription</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Coefficient</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultsCheck > 0) :
                    foreach ($results as $row) : ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['duration'] . " heures" ?></td>
                            <td><?php echo $row['coefficient'] ?></td>
                        </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>