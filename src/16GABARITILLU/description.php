<!-- C&PAINT -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="style.css">
<div class="description">

<a href="../15PACKSHOT/15.php" class="btn">  précédent <i class="fas fa-redo"></i> </a>


<a href="https://webdesign.adoubeweb.fr/" class="btn">  Accueil<i class="fas fa-home"></i></a>     
<a href="https://webdesign.adoubeweb.fr/src/PROJETSGRID/16/16.php" class="btn"> Voir Projet <i class=""></i> </a> 
     
<a href="../17BHD/17.php" class="btn">  suivant <i class="fas fa-redo"></i> </a>
   
<br></br>
   <h1 class="heading"> <span>DESIGN INDUSTRIEL</span><br>CINEMA 4D</h1>
 


 <div class="box-container-fluid">
                        <?php           
                                $cards = array(
                               "116", );
                                shuffle($cards);
                                foreach ($cards as $card) {  
                                    echo "<div><img src='$card.webp'  
                                    height='500px' width='740' margin='auto;'
                                     border='5 solid 2px white'></div> <br>";
                        }
                        ?>   
</div>   
