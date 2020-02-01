<aside class="send col-12 col-lg-3">
          <form  action="askbdd.php" method="post" enctype="multipart/form-data">
          <p>
          Formulaire d'envoi de fichier :<br><br>
            <input type="hidden" name="uri" id="uri" value="http://raf21.hd.free.fr/UPIMG/">
          <label for="monfichier">Selectionne le document</label><br>
          <input type="file" id="monfichier" name="monfichier" required="required"/><br>
          <label for="matiere">Matière</label>
            <select id="matiere" name="matiere" required="required">
              <option value=""> --- </option>
              <option value="nimp">Nimp</option>
              <option value="ang">Anglais</option>
              <option value="fra">Français</option>
              <option value="mth">Maths</option>
              <option value="phy">Phy/Chi</option>
              <option value="his">Histoire</option>
            </select><br>
          <label for="cours">Cours</label><input type="radio" name="cate" id="cours" value="cours"><br>  
          <label for="devoir">Devoir</label><input type="radio" name="cate" id="devoir" value="devoir"><br>
          <label for="exam">Contrôle</label>
          <input type="radio" id="exam" name="cate" value="exam"><br>
          <label for="com">Commentaire:</label><br>
            <textarea></textarea><br><br>
          <input type="submit" id="upld" value="Envoyer !" />
          </p>
          </form>
        </aside>