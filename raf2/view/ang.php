<?php include ('head.php'); ?>   

<main class="row">
        <?php include ('aside.php'); ?>
        <section class="col-xs-12 col-lg-12">
         <?php
            try{
                 $bdd = new PDO('mysql:host=localhost;dbname=RAF','root','');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
           
            $reponse= $bdd->query('SELECT * FROM lesson WHERE matiere="anglais" ORDER BY id ');
            while($ang= $reponse->fetch()){
	       //echo "<img=\"".$math['url']."\"><br>";
	       //echo "<img class=\"mini\" src=\"".$ang['url']."\"><br>";
                echo "<img class=\"mini\" src=\"/RAF/raf2/UPIMG/".$ang['nom']."\"><br>";
            }
        $reponse->closeCursor();
            ?>	
        </section>
        <button class="btn btn-primary btn-lg"><i class="fas fa-bars"></i></button>
      </main>
<?php include ('foot.php');?>
