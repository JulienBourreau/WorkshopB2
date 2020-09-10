<?php include_once 'layout/header.php' ?>  

<main id="main">

    <section>
        <div class="container">


            <h1>Consommation Energétique</h1>
            <?php
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
                        <th>Voir carte</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lignes as $ligne) {
                        ?>
                        <tr>
                            <td><?php echo $ligne["nom"]?></td>
                            <td><?php if($ligne["bio"]=='0') {
                                echo "Pas bio";}
                                else echo "Bio";
                                ?></td>
                                <td><?php echo $ligne["Nom"]?></td>
                                <td><a href="voirmap.php?id=<?php echo $ligne["id"] ?>"
                                 class="btn-floating">
                                 <i class="material-icons">map</i></td>
                                 <td></td>
                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
                 <a href="scanner-article.php" class="btn-large">
                    <i class="material-icons left">add_circle_outline</i>
                    Scanner un produit
                </a>


            </div>    
        </section>
    </main>

    <?php include_once 'layout/footer.php' ?>