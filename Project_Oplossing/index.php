<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>

<?php

$homeindex = CallAPI("GET", $DB . "/tblhome");

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
<main>
<section id="summary" class="container pt-3">


<div class="jumbotron primary mb-0 rounded-0" id="indexjumbo">
    <h1 class="display-3 font-weight-bold">de boeken hoek</h1>
    <p class="cursief">"There is more treasure in books than in all the pirate's loot on teasure island".</p>
    <hr class="my-4 mb-2">
    <p>Er zitten meer schatten in boeken dan in alle piratenbuiten op Schatteneiland.</p>
    <p class="lead">
      <a class="btn1 btn-lg " href=book_view.php role="button">Boeken overzicht</a>
    </p>
    </section>

    <section id="portofolio"class="pt-3">
			<div class="container text-center">
			 <h2 class="text-uppercase">te ontdekken.</h2>
			 <hr>
			 <div class="row">
			 <?php
//Overlopen van de vluchten en tonen van de gegevens.
foreach ($homeindex as $home) {
    ?>
			 	<div class="col-sm-6 col-lg-4 pb-4">
			 		<a  href="<?php print($home["link"])?>"><img  src="<?php print($home["image"])?>" alt="bib" class="img-fluid"></a>
					<a class="tekst" href="<?php print($home["link"])?>"><?php print($home["titel"])?></a>
			 	</div>
<?php } ?>
			 	
			 </div>
			 </div>
             <div>
             <p class="lead p-3">
             <button type="button" id="btnColor"  class="btn btn-info text-center">Kleur de webpagina</button>
            </p>
             </div>
             
             <script>
             var button = document.getElementById("btnColor");

             button.addEventListener('click', function () {
                changeColor();
                });

            function changeColor() {
            var x = Math.floor(Math.random() * 256);
            var y = Math.floor(Math.random() * 256);
            var z = Math.floor(Math.random() * 256);
            var bgColor = "rgb(" + x + "," + y + "," + z + ")";

            document.body.style.backgroundColor = bgColor;


            }

             </script>
			</section>
            
			</main>

<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>

</body>
</html>