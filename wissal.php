<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fullname = $_POST['fullname'];
    $location = $_POST['location'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $phone = $_POST['phone'];
    
    
    // تأكيد استلام الطلب
    echo "Nous avons reçu votre commande : <br>";
    echo "Nom et prénom: $fullname <br>";
    echo "Localisation: $location <br>";
    echo "Couleur: $color <br>";
    echo "Taille: $size <br>";
    echo "Numéro de téléphone: $phone <br>";
}
?>
