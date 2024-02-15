

<!DOCTYPE html>
<html>
<head>
    <title>Mon site web</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
    <nav class="navbar">
        <a href="index.php">Accueil</a>
        <a href="contact.php">Nous Contacter</a>
        <a href="inscription.php">Inscription</a>
        <a href="vols.php">Vols</a>
        <a href="pilotes.php">Pilotes</a>
        <a href="login.php">Se connecter</a>
        <?php if(est_connecte()): ?>
            <a href="logout.php">Se déconnecter</a>
        <?php endif; ?>
    </nav>