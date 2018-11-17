<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<main>
<section id="summary" class="container">
<div class="jumbotron primary mb-0 rounded-0" id="indexjumbo">
    <h1 class="display-3 font-weight-bold">de boeken hoek</h1>
    <p class="lead">"There is more treasure in books than in all the pirate's loot on teasure island".</p>
    <hr class="my-4">
    <p>Er zitten meer schatten in boeken dan in alle piratenbuit op Schatteneiland.</p>
    <p class="lead">
      <a class="btn btn-success btn-lg" href=book_view.php role="button">Boeken overzicht</a>
    </p>
    </section>
    <section id="portofolio"class="pt-3">
			<div class="container text-center">
			 <h2 class="text-uppercase">te ontdekken.</h2>
			 <hr>
			 <div class="row">
			 	<div class="col-sm-4 pb-4">
			 		<img src="" alt="bib" class="img-fluid">
					 <a href="">boeken</a>
			 	</div>
			 	<div class="col-sm-4 pb-4">
			 		<img src="" alt="boeken" class="img-fluid">
					 <a href="">bibliotheken</a>
			 	</div>
			 	<div class="col-sm-4 pb-4">
			 		<img src="" alt="boeken store" class="img-fluid">
					 <a href="">boeken winkel</a>
			 	</div>
			 	<div class="col-sm-4">
			 		<img src="Assets/Assets/game.png" alt="lezen" class="img-fluid">
					 <a href="">het nut van lezen</a>
			 	</div>
			 	<div class="col-sm-4">
			 		<img src="Assets/Assets/safe.png" alt="geschiedins" class="img-fluid">
					 <a href="">geschidenins van het boek</a>
			 	</div>
			 	<div class="col-sm-4">
			 		<img src="Assets/Assets/submarine.png" alt="contact" class="img-fluid">
					 <a href="">Contact</a>
			 	</div>
			 </div>
			 </div>
			</section>
			</main>

<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>

</body>
</html>