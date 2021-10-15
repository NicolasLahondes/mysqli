<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <h3>Vous avez selectionné
            <?php
            if (!empty($_GET) && !empty($_GET['id'])) :
                $trainee = $trainees->takeOneElement($bddConn, ($_GET['id']));
                echo $trainee['firstname'] . " " . $trainee['name'];
            else : echo "Personne";
            endif;
            ?>
        </h3>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Modifier</th>
                    <th>Selectionner</th>
                    <th>Envoyer sur une autre page</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aTrainees as $value) : ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['firstname'] ?></td>
                        <td><?php echo $value['birthdate'] ?></td>
                        <td><a href="index.php?action=elevesModify&id=<?php echo $value['id']?>&name=<?php echo $value['name']?>&firstname=<?php echo $value['firstname']?>&birthdate=<?php echo $value['birthdate'] ?>">Modifier</a></td>
                        <td><a href="index.php?action=eleves&id=<?php echo $value['id'] ?>">Selectionner</a></td>
                        <td><a href="index.php?action=elevesOne&id=<?php echo $value['id'] ?>">Vers une autre page et au delà</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>