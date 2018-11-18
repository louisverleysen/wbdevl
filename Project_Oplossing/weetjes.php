<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php

$weetjes = CallAPI("GET", $DB . "/tblweetjes");

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
    <?php include_once 'views/shared/_head_winkel.inc';?>
</head>
<main>
<div class="container">

<div class="post_content">

      <div class="row">
      <?php
//Overlopen van de vluchten en tonen van de gegevens.
foreach ($weetjes as $weetje) {
    ?>
        <div class="col-md-8">
   
          <h1 class="my-4"><?php print($weetje["hood_t"])?></h1>
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php print($weetje["image"])?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php print($weetje["Titel"])?></h3>
              <p class="card-text"><?php print($weetje["inhoud"])?></p>
            </div>
            
          </div>
          
        </div>

<?php } ?>
        
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Categories Widget -->
          <div class="card my-3">
            <h5 class="card-header">Categorieën</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Boeken</a>
                    </li>
                    <li>
                      <a href="#">Boeken info</a>
                    </li>
                    <li>
                      <a href="#">Boeken winkel</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Bibliotheken</a>
                    </li>
                    <li>
                      <a href="#">Registreer</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Wistje datje</h5>
            <div class="card-body">
           <span><b> …mensen met dyslexie vaak creatiever zijn dan mensen zonder?</b>Om problemen te omzeilen, leren ze al jong creatief denken. Andere mensen hebben dit niet nodig. Die werken daarom saai via de gekende wegen en zijn minder creatief.
           </span> </div>
          </div>
        <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">banner</h5>
            <div class="card-body">
              <img class="card-img-top" src="images/weetjes/boeken.jpg" alt="Card image cap">
            </div>
          </div>
          </div>
          
       
       
       
       
        </div>   
        
      </div>
      
    </div>
    

 
<?php include_once 'views/shared/_footer.inc';?>
</footer>