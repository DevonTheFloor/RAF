 <?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 9000000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('mp4','mp3','jpg', 'jpeg', 'gif', 'png','mov','odt','ods','ogg');//
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], '/RAF/raf2/UPIMG/'.basename($_FILES['monfichier']['name']));
                        echo "L'envoi du fichier " ."<strong>".$_FILES['monfichier']['name']."</strong>"." d'une taille de "."<strong>".$_FILES['monfichier']['size']." octets"."</strong>"." a bien été effectué !<br><br><br>";
		echo "<img  class=\"mini\" src=\"FRC/".$_FILES['monfichier']['name']."\">";
			echo '<pre>';
			print_r ($_FILES);
			echo'</pre>';
			echo 'depuis : <br> <p> Adresse locale: ' .$_SERVER['REMOTE_ADDR'].'<br> Port Client: '.$_SERVER['REMOTE_PORT']. '</p>';
                }
			else {echo 'type de fichier non accepté';}
        }
	else {echo 'Fichier trop volumineux';}
}
else{echo "erreur type: ".$_FILES['monfichier']['error']." sur le fichier <br><br><br>";
	switch($_FILES['monfichier']['error']){
		case 1:
			echo'<strong>La taille du fichier téléchargé excède la valeur de upload_max_filesize, configurée dans le php.ini. <br> nom:  UPLOAD_ERR_INI_SIZE </strong>';
		break;
		case 2:
			echo'<strong>La taille du fichier téléchargé excède la valeur de MAX_FILE_SIZE, qui a été spécifiée dans le formulaire HTML. <br> nom: UPLOAD_ERR_FORM_SIZE </strong></p>';
		break;
		case 3:
			echo'<strong>Le fichier n\'a été que partiellement téléchargé.<br> nom: UPLOAD_ERR_PARTIAL </strong>';
		break;
		case 4:
			echo '<strong> Aucun fichier n\'a été téléchargé.<br> nom: UPLOAD_ERR_NO_FILE </strong>';
		break;
		case 6:
			echo ' <strong> Un dossier temporaire est manquant. Introduit en PHP 5.0.3. <br> nom: UPLOAD_ERR_NO_TMP_DIR </strong>';
		break;
		case 7:
			echo ' <strong> Échec de l\'écriture du fichier sur le disque. Introduit en PHP 5.1.0. <br> nom: UPLOAD_ERR_CANT_WRITE </strong>';
		break;
		case 8:
			echo '<strong>Une extension PHP a arrêté l\'envoi de fichier. PHP ne propose aucun moyen de déterminer quelle extension est en cause. L\'examen du phpinfo() peut aider. Introduit en PHP 5.2.0. <br> nom: UPLOAD_ERR_EXTENSION </strong>';
		default:
			echo '<strong>erreur non referencée </strong>';
		break;  }
 }
 if (isset($_POST)){
     
     $nom = $_FILES['monfichier']['name'];
     $ext = $extension_upload;
      try{
                 $bdd = new PDO('mysql:host=localhost;dbname=RAF','root','');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
     
     $req = $bdd->prepare('INSERT INTO lesson (nom, ext, matiere, categorie, com, date) VALUES(:nom, :ext,:matiere, :categorie, :com, NOW())');
     $req->execute(array(
	   'nom' => $nom,
	   'ext'=> $extension_upload,
	   'matiere'=> $_POST['matiere'],
	   'categorie'=> $_POST['categorie'],
	   'com'=> $_POST['com']));

 }
?>
