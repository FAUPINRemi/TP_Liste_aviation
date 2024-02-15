<?php
session_start();
include_once 'auth.php';
?>


<?php include 'header.php'; ?>
<main>
    <form action="traitement-inscription.php" method="post">
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Numéro de téléphone :</label><br>
        <input type="tel" id="phone" name="phone"><br>
        <label for="address">Adresse :</label><br>
        <input type="text" id="address" name="address"><br>
        <input type="submit" value="S'inscrire">
    </form>
</main>
<?php include 'footer.php'; ?>