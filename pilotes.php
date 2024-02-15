<?php
include_once 'auth.php';
connected_user();
?>
<?php include 'header.php'; ?>
<?php
$json = file_get_contents("aero.json");

$donees = json_decode($json, true);
?>


<h1 class="tableauinfo">Pilotes</h1>
<table>
    <th>
        <tr>
            <th>Adresse</th>
            <th>Communication</th>
            <th>Embauche</th>
            <th>Nom</th>
            <th>No pilote</th>
            <th>Salaire</th>
        </tr>
    </th>

<?php
foreach ($donees['pilotes'] as $pilote) {?>

    <tr>
        <td>
            <?php echo $pilote['adresse']?>
        </td>
        <td>
            <?php echo $pilote['commission']?>
        </td>
        <td>
            <?php echo $pilote['embauche']?>
        </td>
        <td>
            <?php echo $pilote['nom']?>
        </td>
        <td>
            <?php echo $pilote['nopilote']?>
        </td>
        <td>
            <?php echo $pilote['salaire']?>
        </td>
    </tr>
<?php } ?>
</table>

<?php include 'footer.php'; ?>
