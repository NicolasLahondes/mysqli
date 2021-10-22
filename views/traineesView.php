<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <h3>Vous selectionnez actuellement
            <?php
            if (!empty($_GET) && !empty($_GET['id'])) :
                Trainees::takeOneElement($bddConn, $_GET['id']);
                echo $trainees->getFirstname();
            else : echo "Personne";
            endif;
            ?>
        </h3>
    </div>
    <div class="container">
        <?php if (!empty($arrayTrainees)) : ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        <th>Selectionner</th>
                        <th>Envoyer sur une autre page</th>
                        <th>Age</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayTrainees as $trainee) : ?>
                        <tr>
                            <td><?php echo $trainee->getId(); ?></td>
                            <td><?php echo $trainee->getName(); ?></td>
                            <td><?php echo $trainee->getFirstname(); ?></td>
                            <td><?php echo $trainee->getBirthdate(); ?></td>
                            <td><a href="index.php?action=elevesModify&modified=&id=<?php echo $trainee->getId() ?>&name=<?php echo $trainee->getName() ?>&firstname=<?php echo  $trainee->getFirstname() ?>&birthdate=<?php echo $trainee->getBirthdate() ?>">Modifier</a></td>
                            <td><a href="index.php?action=eleves&delete=1&id=<?php echo $trainee->getId() ?>">Supprimer</a></td>
                            <td><a href="index.php?action=eleves&id=<?php echo $trainee->getId() ?>">Selectionner</a></td>
                            <td><a href="index.php?action=elevesOne&id=<?php echo $trainee->getId() ?>">Vers une autre page et au delà</a></td>
                            <td><?php echo $trainee->calcAge($bddConn, $trainee->getId())  . " ans"; ?></td>
                            <td><?php echo $trainee->seniorJunior($trainee->calcAge($bddConn, $trainee->getId())); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php
        else : echo "Aucuns résultats ne correspondent à votre recherche, c'est vraiment, vraiment, vraiment très dommage :-(";
        endif; ?>
    </div>
</body>

</html>