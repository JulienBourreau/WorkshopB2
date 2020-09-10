<?php include_once "layout/header.php" ?>

<main id="main">

  <section>
    <div class="container">
      

      <h1>Scanner un produit</h1>
      <form action="actions/ScannerUnArticle.php" method="post">
          <div class="row">
              <div class="input-field col s12">
                 
                  <select name="id_pays">
                    <option value="" selected></option>
                    <option value="1">France</option>
                    <option value="2">Japon</option>
                    <option value="3">Brésil</option>
                    <option value="4">Allemagne</option>
                    <option value="5">Pérou</option>
                    <option value="6">Uruguay</option>
                    <option value="7">Ouganda</option>
                    <option value="8">Vatican</option>
                </select>
                <label>Selectionnez un Pays</label>
            </div>
            <div class="input-field col s12">
             
              <select name="id_variete">
                <option value="" selected></option>
                <option value="1">Pomme</option>
                <option value="2">Banane</option>
                <option value="3">Kiwi</option>
                <option value="4">Avocat</option>
                <option value="5">Brocoli</option>
                <option value="6">Carotte</option>
                <option value="7">Concombre</option>
                <option value="8">Tomate</option>
                <option value="9">Iceberg</option>

            </select>
            <label>Selectionnez un fruit/légume</label>
        </div>
<div class="input-field col s12">
             
              <select name="saison">
                <option value="" selected></option>
                <option value="Pas_de_saison">Pas de saison</option>
                <option value="De_saison">De saison</option>
            </select>
            <label>Selectionnez une saison</label>
        </div>
  <div class="input-field col s12">
                 
                  <select name="bio">
                    <option value="" selected></option>
                    <option value="0">Pas Bio</option>
                    <option value="1">Bio</option>
                </select>
                <label>Bio</label>
            </div>
      <div class="input-field col s12">
          <textarea id="distance" name="distance" 
          class="materialize-textarea"></textarea>
          <label for="bio">Distance entres les pays</label>
      </div>
      <div class="input-field col s12">
          <a href="index.php" class="btn red left">Annuler</a>
          <input type="submit" value="OK" class="btn-large right">
      </div>
      </div>
      </form>

    </div>
  </section>

</main>


<?php include_once "layout/footer.php" ?>