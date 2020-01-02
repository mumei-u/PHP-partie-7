<?php
/* variable pour remplacer automatiquement la valeur des exos 'ex=1,2,3...' dans header.php */
$exerciseNb = 7;
include '../header.php';
$lastname = '';
$firstname = '';
$gender = '';
$message1 = '';
$message2 = '';
if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $gender = $_POST['gender'];
    if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0)
        $fileinfo = pathinfo($_FILES['userfile']['name']);
        $filename = $fileinfo['basename'];
        $message1 = 'Merci ' .htmlspecialchars($gender). ' ' .htmlspecialchars($lastname). ' ' .htmlspecialchars($firstname);
        $message2 = 'Votre fichier ' .htmlspecialchars($filename). ' a bien été choisi!';
   } else {
    $message2 = 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas abouti';
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <form action="#" method="POST" enctype="multipart/form-data">
                <select class="form-group custom-select" name="gender">
                    <option disabled selected="">civilité</option>
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <div>
                    <div class="form-group col">
                        <label for="lastname">Nom</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lobato Leao">
                    </div>
                    <div class="form-group col">
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Thyago">
                    </div>
                    <div class="form-group col">
                        <label for="file">Veuillez choisir un fichier</label>
                        <input type="file" id="firstname" name="userfile" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">envoyer</button>
            </form>
        </div>
    </div>
<?php
}
?>
<p> <?= $message1 ?> <br> <?= $message2 ?></p>
<?php include '../footer.php';
