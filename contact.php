<?php
session_start();
include_once 'auth.php';
?>


<?php include 'header.php'; ?>
<main>
    <form action="traitement-contact.php" method="post">
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message :</label><br>
        <input type="text" id="message" name="message"><br>
        
        <input type="submit" value="Envoyer">
    </form>
</main>
<?php include 'footer.php'; ?>
