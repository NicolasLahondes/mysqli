<!DOCTYPE html>
<html lang="en">
<body>
    <div>
        <h3>Vous avez selectionné
            <?php
            if (!empty($_GET) && !empty($_GET['id'])) :
                $trainee = $trainees->takeOneElement($bddConn, ($_GET['id']));
                echo $trainee['firstname'] . " " . $trainee['name'];
            endif;
            ?>
        </h3>
    </div>
</body>

</html>