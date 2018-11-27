<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
$contacten = CallAPI("GET", $DB . "/tblcontact");

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
<section>
<div class="container">
<h1 class="text-left">Contact adres</h1>
<hr>
  <div class="row">
    <div class="col-sm-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-4" id="contact2">
        <h3>Contact gegevens</h3>
<?php
foreach($contacten as $contact)
?>
        <hr align="left" width="50%">
        <h4 class="pt-2">Adres</h4>
        <i class="fas fa-globe" style="color:#000"><a href="<?php print($contact["adres_site"])?>"> Homepage</a></i>
        
        <h4 class="pt-2">Contact</h4>
        <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> <?php print($contact["gsm_nr"])?></a><br>
        <i class="fab fa-whatsapp" style="color:#000"></i> <a href="tel:+"><?php print($contact["telefoon_nr"])?></a><br>
        <h4 class="pt-2 ">Email</h4>
        <i class="fa fa-envelope" style="color:#000"></i> <a href=""><?php print($contact["email"])?></a><br>
      </div>
  </div>
</div>
</section>
</main>
<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>