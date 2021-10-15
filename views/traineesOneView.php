<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <h3>Vous avez selectionné
            <?php
            if (!empty($_GET) && !empty($_GET['id'])) :
                echo $trainees->getName() . " " .  $trainees->getFirstname();
            endif;
            ?>
        </h3>
    </div>
</body>

</html>