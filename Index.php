<?php include_once "header.php" ?>
<?php include_once "menu.php" ?>
<h1>Consommation Energétique</h1>
<?php
require_once 'Config.php';
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE , Config::USER , Config::MDP);
$r=$db->prepare("select * from variete v join pays_variete pv on v.id=pv.id_variete join pays p on pv.id_pays=p.Id;");
$r->execute();

$lignes=$r->fetchAll();?>
<table>
    <thead>
        <tr>
            <th>Espèce</th>
            <th>Bio/Pas bio</th>
            <th>Pays de provenance</th>
            <th>Empreinte carbone</th>
            <th>Score</th>
        </tr>
    </thead>
	<tbody>
		<?php
		foreach ($lignes as $ligne) {
    ?>
		<tr>
                <td><?php echo $ligne["nom"]?></td>
                <td><?php echo $ligne["bio"]?></td>
                <td><?php echo $ligne["Nom"]?></td>
                <td></td>
                <td></td>
            </tr>
<?php } ?>
    </tbody>
</table>
<a href="ScannerArticle.php" class="btn-large">
    <i class="material-icons left">add_circle_outline</i>
    Scanner un produit
</a>

<?php include_once "footer.php" ?>