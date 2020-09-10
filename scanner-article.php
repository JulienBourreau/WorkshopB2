<?php include_once "layout/header.php" ?>

<main id="main">

  <section>
    <div class="container">
      

      <h1>Scanner un produit</h1>
      <form>
          <div class="row">
              <div class="input-field col s12">
                 
                  <select>
                    <option value="" selected></option>
                    <option value="1">France</option>
                    <option value="2">Japon</option>
                    <option value="3">Option 3</option>
                </select>
                <label>Selectionnez un Pays</label>
            </div>
            <div class="input-field col s12">
             
              <select>
                <option value="" selected></option>
                <option value="1">Pomme</option>
                <option value="2">Japon</option>
                <option value="3">Option 3</option>
            </select>
            <label>Selectionnez un fruit/légume</label>
        </div>
        <div class="input-field col s12">
          <textarea id="saison" name="saison" 
          class="materialize-textarea"></textarea>
          <label for="saison">Saison actuelle</label>
      </div>
      <div class="input-field col s12">
          <textarea id="bio" name="bio" 
          class="materialize-textarea"></textarea>
          <label for="bio">Bio ou non</label>
      </div>
      <div class="input-field col s12">
          <textarea id="distance" name="distance" 
          class="materialize-textarea"></textarea>
          <label for="bio">Distance entres les pays</label>
      </div>
      <div class="input-field col s12">
          <a href="Index.php" class="btn red left">Annuler</a>
          <input type="submit" value="OK" class="btn-large right">
      </div>
      </div>
      </form>

    </div>
  </section>

</main>


<?php include_once "layout/footer.php" ?>