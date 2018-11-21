<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
$boekenwinkel = CallAPI("GET", $DB . "/tblwinkel");


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

<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_navinlog.inc';?>
</header>
<head>
<?php include 'views/shared/_head_winkel.inc';?>
</head>
<?php
//Indien een record verwijderd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["extra"])) {
    if ($_GET["extra"] == "yes") {
        ?>
        <div class="alert alert-success">
        <strong>Verwijderen Succesvol!</strong> Geselecteerde boek verwijderd.
        </div>
        <?php

    } elseif ($_GET["extra"] == "no") {
        ?>
        <div class="alert alert-success">
        <strong>Toevoegen Succesvol!</strong> Er is een winkel toegevoegt.
        </div>
        <?php
}
}

?>
<main>
<div class="container">
<h1 class="my-4">Boeken winkels
        <small>in de buurt</small>
      </h1>
      <div class="row">
    <?php
        foreach($boekenwinkel as $winkel){
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item pt-4">
        
          <div class="card h-100">
            <a href="#"><img class="card-img-top p-2" src="<?php print($winkel["ImageUrl"]); ?>" alt="fotos"></a>
            <div class="card-body">
              <h4 class="card-title"><?php print($winkel["Naam"]);?></h4>
              <p class="card-text"><?php print($winkel["Description"]); ?></p>
			  <a class="btn btn-info btn-lg" href="toon_boeken_winkel" role="button">aantal boeken <?php print($winkel["aantal"]); ?></a>
          </div>
          </div>          
        </div>
        <?php } ?>
      </div>    
      
</div>  >
        </div>

	  <div class="pt-4">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

</div>
</main>


</main>  
</body>


<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>