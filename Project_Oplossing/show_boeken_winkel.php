<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
$boekenwinkel = CallAPI("GET", $DB . "/tblwinkel");
$boeken = CallAPI("GET", $DB . "/tblboeken");


function findInArray($arr, $value, $column = 0)
{
    $nr = 0;
    foreach ($arr as $item) {
        if ($item[$column] == $value) {
            return $nr;
        }
        $nr++;
    }
}

?>
<?php
//Indien een record verwijderd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["create"])) {
    if ($_GET["create"] == "yes") {
        ?>
        <div class="alert alert-success">
        <strong>Verwijderen Succesvol!</strong> Geselecteerde boek verwijderd.
        </div>
        <?php

    } elseif ($_GET["create"] == "no") {
        ?>
        <div class="alert alert-danger">
        <strong>Verwijderen niet mogelijk!</strong> Dit boek kan niet verwijderd worden.
        </div>
        <?php
}
}

?>



<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>
<head>
<?php include 'views/shared/_head_winkel.inc';?>
</head>
<main>
<div class="container">
<h2 class="my-2">Boeken winkels
        <small>in de buurt</small>
      </h2>
      <div class="row">
    <?php
        foreach($boekenwinkel as $winkel){
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item p-3">
        
          <div class="card h-100">
            <a href="toon_boeken_in_winkel.php?WinkelID=<?php print($winkel["WinkelID"])?>"><img class="card-img-top p-2" src="<?php print($winkel["ImageUrl"]); ?>" alt="fotos"></a>
            <div class="card-body">
              <h4 class="card-title"><?php print($winkel["Naam"]);?></h4>
              <p class="card-text"><?php print($winkel["Description"]); ?></p>
              <a  href="toon_boeken_in_winkel.php?WinkelID=<?php print($winkel["WinkelID"])?>"><button type="button" class="btn btn-info">beschikbare boeken <?php print($winkel["aantal"]); ?></button></a>
          </div>
          </div>          
        </div>
        <?php } ?>
      </div>    
      
</div>  


</div>


</main>  
<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>
</body>

