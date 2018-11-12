<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["WinkelID"] = $_POST["WinkelID"];
    $lijn["Naam"] = $_POST["Naam"];
    $lijn["Description"] = $_POST["Description"];
    $lijn["ImageUrl"] = $_POST["ImageUrl"];
    $lijn["aantal"] = $_POST["aantal"];

    
   

    $result = CallAPI("POST", $DB . "/tblwinkel", json_encode($lijn));
    
    header("location:show_boeken_winkellogin.php");
    exit;
} else {
    $winkels = CallAPI("GET", $DB . "/tblwinkel");   
} 
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_navinlog.inc';?>
</header>
<main>
<section id="summary" class="container">
        <h1>Winkel toevoegen</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="WinkelID">WinkelID</label>
<?php
$max = 0;
//Zoek het grootste winkelID.
foreach ($winkels as $winkel) {
    if ($winkel["WinkelID"] > $max) {
        $max = $winkel["WinkelID"];
    }
}
?>
<input type="number" class="form-control" name="WinkelID" id="WinkelID" value="<?php echo $max + 1; ?>" min="<?php echo $max + 1; ?>" readonly/>
<div class="form-group">
       <label for="Naam">Naam winkel</label>
        <input type="text" class="form-control" name="Naam" id="Naam">
       </div>
<div class="form-group">
    <label for="Description">info winkelketen</label>
    <textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
</div>
<div class="form-group">
       <label for="aantal">aantal boeken</label>
        <input type="text" class="form-control" name="aantal" id="aantal">
       </div>
<div class="form-group" method="post" enctype="multipart/form-data">
    <label for="ImageUrl">afbeelding uplouden winkel</label>
    <input type="file" class="form-control-file" name="ImageUrl" id="ImageUrl">
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="Add boeken winkel" />
</div>
</form>
</main>    
</body>

<?php include_once 'views/shared/_footer.inc';?>