<!-- C&PAINT -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="style.css">
<div class="description">

<div class="description"><a href="../1PROJETRAMA/1.php" class="btn">  précédent <i class="fas fa-redo"></i> </a>

<a href="https://webdesign.adoubeweb.fr/" class="btn">  Accueil<i class="fas fa-home"></i></a>     
<a href="https://webdesign.adoubeweb.fr/src/PROJETSGRID/2/2.php" class="btn"> Voir Projet <i class=""></i> </a> 
     
<div class="description"><a href="../3AUCHAN/3.php" class="btn"> suivant <i class="fas fa-redo"></i> </a>
   
<br></br>
    <h1 class="heading"> <span>CLICK & PAINT</span><br>SERVICE DE COMMANDE DE PEINTURE</h1>

 

 <div class="box-container-fluid">
                        <?php           
                                $cards = array(
                               "2" );
                                shuffle($cards);
                                foreach ($cards as $card) {  
                                    echo "<div><img src='$card.png'  
                                    height='500px' width='740' margin='auto;'
                                     border='5 solid 2px white'></div> <br>";
                        }
                        ?>   
</div>   
