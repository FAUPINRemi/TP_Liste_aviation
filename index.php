<?php
session_start();
include_once 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
    <main>
        <div class="container">
        <header>Accueil</header>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus perferendis accusantium, nulla nobis nesciunt porro sint optio eius quae dignissimos, doloribus, fugiat illo. Eius nobis repudiandae nemo ratione ab commodi!
        </p>
        <p>@2023 Mon site web tout droit réservés</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>