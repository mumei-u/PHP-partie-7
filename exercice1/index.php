<?php
$exerciseNb = 1;
include '../header.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <form action="../user.php" method="GET">
            <div>
                <div class="form-group col">
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lobato Leao">
                </div>
                <div class="form-group col">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Thyago">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">envoyer</button>
        </form>
    </div>
</div>
<?php
include '../footer.php';
