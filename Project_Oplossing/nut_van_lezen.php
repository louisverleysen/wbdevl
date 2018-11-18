<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php

$lezen = CallAPI("GET", $DB . "/tbllezen");

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


<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<head>
<?php include_once 'views/shared/_head_bib.inc';?>
</head>
<main>

<section id="page-content">
        <div class="container">
            <div class="creation">
                <div class="content">
                <?php
         //Overlopen van de vluchten en tonen van de gegevens.
        foreach ($lezen as $lees) {
         ?>
                    <div class="row">
                        <div class=" col-md-5"><img src="<?php print($lees["image"])?>" alt="foto4" width="100%"></div>
                        <div class=" col-md-7 hidden-lg">
                   <h1><?php print($lees["title"])?></h1>
                   <div><?php print($lees["inhoud"])?></div>
                      
               
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>
</section>
</div>
</div>
</div>

</main>
<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>