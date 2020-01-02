<?php
if (isset($_GET['lastname']) && isset($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['firstname'])) {
    echo 'Votre nom avec la method GET : ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
} elseif (isset($_POST['lastname']) && isset($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
    echo 'Votre nom avec la method POST : ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
} else {
    echo 'Au moins un champs non rempli.';
}
