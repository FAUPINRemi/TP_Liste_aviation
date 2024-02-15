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
            <th>Heure arrivée</th>
            <th>Heure départ</th>
            <th>N° vol</th>
            <th>Ville arrivée</th>
            <th>Ville départ</th>
        </tr>
    </th>

<?php
foreach ($donees['vols'] as $vols) {?>

    <tr>
        <td>
            <?php echo $vols['heurearr']?>
        </td>
        <td>
            <?php echo $vols['heuredep']?>
        </td>
        <td>
            <?php echo $vols['novol']?>
        </td>
        <td>
            <?php echo $vols['villearr']?>
        </td>
        <td>
            <?php echo $vols['villedep']?>
        </td>
       
    </tr>
<?php } ?>
</table>

<?php include 'footer.php'; ?>
