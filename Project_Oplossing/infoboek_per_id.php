<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
$uwid = $_GET["BoekID"];
$boekeninfo = CallAPI("GET", $DB . "/tblboekeninfo/" . $uwid );
$boeken = CallAPI("GET", $DB . "/tblboeken/" . $uwid);

print($uwid)



?>


<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<section id="banner">
        <div class="container">
            <div class="jumbotron jumbotron-fluid mt-3">
                <div class="container mb-3">
                    <h1 class="display-4 text-centre font-weight-bold">detail informatie</h1>
                    <p class="cursief">"A bookstore is one of the only pieces of evidence we have that people are still thinking"</p>
                </div>
            </div>
        </div>
    </section>
<section id="page-content">
        <div class="container">
            <div class="creation">
                <div class="content">
                
                    <div class="row">
                    <div class=" col-md-5"><img src="<?php print($boekeninfo["image"])?>"
                                alt="foto4" width="100%"></div>
                        <div class=" col-md-7 hidden-lg">
                   <h2><?php print($boeken["Titel"])?></h2>
                            <table class="table table-bordered">


  <thead>
    <tr>
      <th scope="col" style="width: 170px">info</th>
      <th scope="col">specificaties</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Schrijver</th>
      <td><?php print($boeken["Schrijver"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Publicatiedatum:</th>
      <td><?php print($boekeninfo["Publicatiedatum"])?></td>
      
    </tr>
    
    <tr>
      <th scope="row">pagina's</th>
      <td><?php print($boekeninfo["Pagina"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Uitgever</th>
      <td><?php print($boekeninfo["Uitgever"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Ondertitel</th>
      <td><?php print($boekeninfo["Ondertitel"])     ?></td>
      
    </tr>
    <tr>
      <th scope="row">Uitvoering</th>
      <td><?php print($boekeninfo["Uitvoering"])?></td> 
    </tr>
  </tbody>
</table>
               
</div>

</div>
</div>
</div>
        </div>
    </section>
    <div class="accordion container" id="accordionExample">
  <div class="card m-2 ">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Korte Omschrijving
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
    <p><?php print($boekeninfo["omschrijving"])?></p>
    </div>
    
  </div>
    </div>
    
  </div>
  
</div>
<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>