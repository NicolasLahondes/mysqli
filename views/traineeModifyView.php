

<div class="container">
    <form action="index.php?action=eleves" method="post">
        <div>
            <h4>Vous modifiez <?php echo $trainees->getFirstname(); ?></h4>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?php echo $trainees->getName(); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstname" name="firstname" value="<?php echo $trainees->getFirstname(); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="birthdate" aria-describedby="birthdate" name="birthdate" value="<?php echo $trainees->getBirthdate(); ?>">
        </div>
        <div>
            <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?php echo $trainees->getId(); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>