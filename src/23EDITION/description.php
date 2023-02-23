<!-- C&PAINT -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="style.css">
<div class="description">
<a href="../22ARP/22.php" class="btn">  précédent <i class="fas fa-redo"></i> </a>

<a href="https://webdesign.adoubeweb.fr/" class="btn">  Accueil<i class="fas fa-home"></i></a>     
<a href="https://webdesign.adoubeweb.fr/src/PROJETSGRID/23/23.php" class="btn"> Voir Projet <i class=""></i> </a> 
     
<a href="../24DIVERS3D/24.php" class="btn">  suivant <i class="fas fa-redo"></i> </a>
<h1 class="heading"> AFFICHES</h1>

<br></br>
 
   

 <div class="box-container-fluid">
                        <?php           
                                $cards = array(
                                "103",);
                                shuffle($cards);
                                foreach ($cards as $card) {  
                                    echo "<div><img src='$card.webp'  
                                    height='500px' width='740' margin='auto;'
                                     border='5 solid 2px white'></div> <br>";
                        }
                        ?>   
</div>   
