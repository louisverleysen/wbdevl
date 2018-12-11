<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php

$bibs = CallAPI("GET", $DB . "/tblbib");
$boek = CallAPI("GET", $DB . "/tblboeken");

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
	<?php include 'views/shared/_nav.inc';?>
</header>
<head>
  <?php include 'views/shared/_head_bib.inc';?>
</head>
<main>
<section>
<h2 class="my-4">Bibliotheken
        <small>in de buurt</small>
      </h2>
      
	  <div class="row">
    <?php
        foreach($bibs as $bib){
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item p-3">
        
          <div class="card h-100">
            <a href="toon_boeken_in_bib.php?BibID=<?php print($bib["BibID"])?>"><img class="card-img-top" src="<?php print($bib["imagebib"])?>" alt="fotos"></a>
            <div class="card-body">
              <h4 class="card-title"><?php print($bib["Naambib"]);?></h4>
              <p class="card-text"><?php print($bib["openingsurenbib"]); ?></p>
			  <a class="btn btn-info btn-lg" href="toon_boeken_in_bib.php?BibID=<?php print($bib["BibID"])?>" role="button">Bischikbare Boeken</a>
          </div>
          </div>          
        </div>
        <?php } ?>
      </div>    
      
</div>    
</section>
        

</main>
<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>