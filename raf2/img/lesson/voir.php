<?php
$bdd = new PDO('mysql:host=localhost;dbname=up_image','root','');
$reponse= $bdd->query('SELECT * FROM lesson WHERE matiere="mth" ORDER BY id ');
while($math= $reponse->fetch()){
	//echo "<img=\"".$math['url']."\"><br>";
	echo "<img src=\"".$math['url']."\"><br>";
}
$reponse->closeCursor();
?>	
