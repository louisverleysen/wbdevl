<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php

$weetjes = CallAPI("GET", $DB . "/tblweetjes");
$home = CallAPI("GET", $DB . "/tblhome");

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
            <div class="col-md-8 m-0">
<?php
//Overlopen van de vluchten en tonen van de gegevens.

foreach ($weetjes as $weetje) {
    ?>

      
              
              <!-- Blog Post -->
              <div class="card mb-4">
              <h1 class=" pl-3"><?php print($weetje["hood_t"])?></h1>
                <img class="card-img-top" src="<?php print($weetje["image"])?>" alt="">
                <div class="card-body">
                  <h3 class="card-title"><?php print($weetje["Titel"])?></h3>
                  <p class="card-text"><?php print($weetje["inhoud"])?></p>
                </div>
             </div>
        <?php } ?>   
              
        </div>
        
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
        
          <!-- Categories Widget -->
          <div class="card my-3">
            <h5 class="card-header">Categorieën</h5>
            <input id="search" class="col-md-4" type="search" onkeyup="myFunction()" placeholder="zoek je link">
      
            <div class="card-body">
            
              <div class="row">
              
                <div class="col-lg-12">
                  <ul id="my-data" class="data-searchable">
                    <?php
                    foreach ($home as $links) {
                      ?>
                    
                    <li class="header" >
                      <a href="<?php print($links["link"])?>"><?php print($links["titel"])?></a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
    
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Wistje dat...</h5>
            <div class="card-body">
           <span><b>mensen met dyslexie vaak creatiever zijn dan mensen zonder?</b> Om problemen te omzeilen, leren ze al jong creatief denken. Andere mensen hebben dit niet nodig. Die werken daarom saai via de gekende wegen en zijn minder creatief.
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
      
    </div>
    
<script>
function myFunction() {
  var input, filter, table, tr, a, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("my-data");
  tr = table.getElementsByTagName("li");
  for (i = 0; i < tr.length; i++) {
    a = tr[i].getElementsByTagName("a")[0];
    if (a) {
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
          
          
 <footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>