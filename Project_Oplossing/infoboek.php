<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>


                    
                <?php

$boekeninfo = CallAPI("GET", $DB . "/tblboekeninfo");
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
<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<section id="banner">
        <div class="container">
            <div class="jumbotron jumbotron-fluid mt-3">
                <div class="container mb-3">
                    <h1 class="display-4 text-centre">detail informatie</h1>
                    <p class="lead">"A bookstore is one of the only pieces of evidence we have that people are still thinking"</p>
                </div>
            </div>
        </div>
    </section>
<section id="page-content">
        <div class="container">
            <div class="creation">
                <div class="content">
                <?php
                    //Overlopen van de vluchten en tonen van de gegevens.
                   foreach ($boekeninfo as $info) {
                         $book = findInArray($boeken, $info["BoekID"], "BoekID");
                            ?>
                    <div class="row">
                        <div class=" col-md-5"><img src="<?php print($info["image"])?>"
                                alt="foto4" width="100%"></div>
                      
                        <div class=" col-md-7 hidden-lg">
                   <h1><?php print($boeken[$book]["Titel"])?></h1>
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
      <td><?php print($boeken[$book]["Schrijver"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Publicatiedatum:</th>
      <td><?php print($info["Publicatiedatum"])?></td>
      
    </tr>
    
    <tr>
      <th scope="row">pagina's</th>
      <td><?php print($info["Pagina"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Uitgever</th>
      <td><?php print($info["Uitgever"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Ondertitel</th>
      <td><?php print($info["Ondertitel"])?></td>
      
    </tr>
    <tr>
      <th scope="row">Uitvoering</th>
      <td><?php print($info["Uitvoering"])?></td>
      
    </tr>
    
  </tbody>
</table>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-primary float-right " >Top</button>            
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
    <p><?php print($info["omschrijving"])?></p>
    </div>
    
  </div>
  
    </div>
    <?php } ?>    
  
  </div>
  
</div>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>
<?php include_once 'views/shared/_footer.inc';?>