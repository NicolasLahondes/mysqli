<div class="container">
    <form action="index.php?action=eleves" method="post">
        <div>
            <h4>Vous modifiez <?php echo $_GET['firstname'] ?></h4>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?php echo $_GET['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstname" name="firstname" value="<?php echo $_GET['firstname'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="birthdate" aria-describedby="birthdate" name="birthdate" value="<?php echo $_GET['birthdate'] ?>">
        </div>
        <div>
            <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?php echo $_GET['id'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>