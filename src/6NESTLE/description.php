<!-- C&PAINT -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="style.css">
<div class="description"><a href="../5MACDO/5.php" class="btn">  précédent <i class="fas fa-redo"></i> </a>



<a href="https://webdesign.adoubeweb.fr/" class="btn">  Accueil<i class="fas fa-home"></i></a>     
<a href="https://webdesign.adoubeweb.fr/src/PROJETSGRID/6/6.php" class="btn"> Voir Projet <i class=""></i> </a> 
     
<a href="../7VINCI/7.php" class="btn">  suivant <i class="fas fa-redo"></i> </a>
   
<h1 class="heading"> <span>Nestlé BIO</span><br>ABRACADAROOM</h1> 




 <div class="box-container-fluid">
                        <?php           
                                $cards = array(
                               "60",);
                                shuffle($cards);
                                foreach ($cards as $card) {  
                                    echo "<div><img src='$card.webp'  
                                    height='500px' width='740' margin='auto;'
                                     border='5 solid 2px white'></div> <br>";
                        }
                        ?>   
</div>   
