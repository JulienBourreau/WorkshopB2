<?php $title="Scanner un article" ?>
<?php include_once "header.php" ?>

<h1>Ajouter une catégorie</h1>
<form>
    <div class="row">
        <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
        <div class="input-field col s12">
            <textarea id="id_variete" name="id_variete"
                      class="materialize-textarea"></textarea>
            <label for="id_variete">Nom du fruit/légume</label>
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

<?php include_once "footer.php" ?>