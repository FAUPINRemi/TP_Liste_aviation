<?php
include_once 'auth.php';

if(est_connecte()) {
    header('Location: pilotes.php');
    exit();
}


if(isset($_POST['login'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['passwd'])) {
        if($_POST['pseudo'] === 'admin' && $_POST['passwd'] === 'iutMeaux') {
            $_SESSION['connecte'] = 1;
            header('Location: pilotes.php');
            exit();
        } else {
            echo "<script language='Javascript'>
            alert ('Mauvais identifiant ou mot de passe');</script>";
        }
    }
}
?>

<?php include 'header.php'; ?>
<h1>Se connecter</h1>
    <form method="post" action="login.php">
        <label for="pseudo">Nom d'utilisateur :</label>
        <input type="text" id="pseudo" name="pseudo" required>

        <label for="passwd">Mot de passe :</label>
        <input type="password" id="passwd" name="passwd" required>

        <input type="submit" name="login" value="Se connecter">
    </form>


    <?php include 'footer.php'; ?>