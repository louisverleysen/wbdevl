<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["BibID"] = $_POST["BibID"];
    $lijn["Naambib"] = $_POST["Naambib"];
    $lijn["openingsurenbib"] = $_POST["openingsurenbib"];
    $lijn["imagebib"] = $_POST["imagebib"];
    

    
   

    $result = CallAPI("POST", $DB . "/tblbib", json_encode($lijn));
    
    header("location:show_boeken_winkellogin.php");
    exit;
} else {
    $bibliotheek = CallAPI("GET", $DB . "/tblbib");   
} 
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_navinlog.inc';?>
</header>
<main>
<section id="summary" class="container">
        <h1>Bibliotheek toevoegen</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="BibID">BibID</label>
<?php
$max = 0;
//Zoek het grootste winkelID.
foreach ($bibliotheek as $bib) {
    if ($bib["BibID"] > $max) {
        $max = $bib["BibID"];
    }
}
?>
<input type="number" class="form-control" name="BibID" id="BibID" value="<?php echo $max + 1; ?>" min="<?php echo $max + 1; ?>" readonly/>
<div class="form-group">
       <label for="Naambib">Naam Bibliotheek</label>
        <input type="text" class="form-control" name="Naambib" id="Naambib">
       </div>
<div class="form-group">
    <label for="openingsurenbib">openingsuren bib</label>
    <textarea class="form-control" id="openingsurenbib" name="openingsurenbib" rows="3"></textarea>
</div>
<div class="form-group" method="post" enctype="multipart/form-data">
    <label for="ImageUrl">afbeelding uplouden winkel</label>
    <input type="file" class="form-control-file" name="ImageUrl" id="ImageUrl">
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="Add bib" />
</div>
</form>


</main>    
</body>
<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>