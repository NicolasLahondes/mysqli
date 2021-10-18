<div class="container">
    <form action="index.php?action=eleves" method="post">
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="" placeholder="LeBlanc">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstname" name="firstname" value="" placeholder="Jérome">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="date" class="form-control" id="birthdate" aria-describedby="birthdate" name="birthdate" value="" placeholder="1999-09-09">
        </div>
        <div class="mb-3">
            <input hidden type="text" class="form-control" id="added" aria-describedby="added" name="added" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</div>