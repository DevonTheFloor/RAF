	<aside class="send col-12 col-lg-3">
          <form  action="/RAF/raf2/UPIMG/addbd.php" method="post" enctype="multipart/form-data">
          <p>
          Formulaire d'envoi de fichier :<br><br>
          <label for="monfichier">Selectionne le document</label><br>
          <input type="file" id="monfichier" name="monfichier" required="required"/><br>
          <label for="matiere">Matière</label>
            <select id="matiere" name="matiere" required="required">
              <option value=""> --- </option>
              <option value="upload">Nimp</option>
              <option value="anglais">Anglais</option>
              <option value="francais">Français</option>
              <option value="maths">Maths</option>
              <option value="physique">Physique</option>
            <option value="chimie">Chimie</option>
              <option value="histoire">Histoire</option>
              <option value="geo">géographie</option>
            </select><br>
          <label for="cours">Cours</label><input type="radio" name="categorie" id="cours" value="cours" required="required"><br>  
          <label for="devoir">Devoir</label><input type="radio" name="categorie" id="devoir" value="devoir"><br>
          <label for="exam">Contrôle</label>
          <input type="radio" id="exam" name="categorie" value="exam"><br>
          <label for="com">Commentaire:</label><br>
            <textarea id="com" name="com"></textarea><br><br>
          <input type="submit" id="upld" value="Envoyer !" />
	  <br><br>
	  <input type="submit" id="cancel" value="Annuler" />
          </p>
          </form>
        </aside>
