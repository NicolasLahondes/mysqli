<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <h3>Vous avez selectionné
            <?php
            if (!empty($_GET) && !empty($_GET['id'])) :
                $trainees = new Trainees();
                $trainees->takeOneElement($bddConn, $_GET['id']);
                echo $trainees->getFirstname();
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
                <?php foreach ($arrayTrainees as $trainee) : ?>
                    <tr>
                        <td><?php echo $trainee->getId(); ?></td>
                        <td><?php echo $trainee->getName(); ?></td>
                        <td><?php echo $trainee->getFirstname(); ?></td>
                        <td><?php echo $trainee->getBirthdate(); ?></td>
                        <td><a href="index.php?action=elevesModify&id=<?php echo $trainee->getId() ?>&name=<?php echo $trainee->getName() ?>&firstname=<?php echo  $trainee->getFirstname() ?>&birthdate=<?php echo $trainee->getBirthdate() ?>">Modifier</a></td>
                        <td><a href="index.php?action=eleves&id=<?php echo $trainee->getId() ?>">Selectionner</a></td>
                        <td><a href="index.php?action=elevesOne&id=<?php echo $trainee->getId() ?>">Vers une autre page et au delà</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>