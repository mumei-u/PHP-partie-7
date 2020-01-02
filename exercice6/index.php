<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 6;
include '../header.php';
$lastname = '';
$firstname = '';
$gender = '';
if (!empty($_GET['gender']) && !empty($_GET['lastname']) && !empty($_GET['firstname'])) {
    echo 'Bonjour ' . $_GET['gender'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ', Comment allez-vous ?';
} else {
    ?>
    <div class="container">
        <form action="#" method="GET">
            <select class="custom-select" name="gender">
                <option disabled selected="">civilité
                <option value="Mr">Mr
                <option value="Mme">Mme
            </select>
            <div>
                <div class="col">
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lobato Leao">
                </div>
                <div class="col">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Thyago">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">envoyer</button>
        </form>
    </div>
    <?php }
?>
<?php
include '../footer.php';
