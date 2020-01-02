<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 4;
include '../header.php';
$lastname = '';
$firstname = '';
?>
<div class="container">
    <div class="row justify-content-center">
        <form action="../user.php" method="POST">
            <div>
                <div class="form-group col">
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lobato Leão">
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
<?php include '../footer.php'; ?>
