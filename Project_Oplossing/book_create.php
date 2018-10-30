<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["VluchtNr"] = $_POST["VluchtNr"];
    $lijn["Vluchtdatum"] = $_POST["Vluchtdatum"];
    $lijn["BestemmingID"] = $_POST["BestemmingID"];
    $lijn["VliegtuigID"] = $_POST["VliegtuigID"];

    $result = CallAPI("POST", $DB . "/tblvlucht", json_encode($lijn));
    
    header("location:flight_view.php");
    exit;
} else {
    $vliegtuigen = CallAPI("GET", $DB . "/tblvliegtuig");
    $bestemmingen = CallAPI("GET", $DB . "/tblbestemming");
    $vluchten = CallAPI("GET", $DB . "/tblvlucht");
}
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>
<main>
    <section id="summary" class="container">
        <h1>Flight Creator</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="VluchtNr">VluchtNr</label>
<?php
$max = 0;

//Zoek het grootste vluchtnummer.
foreach ($vluchten as $vlucht) {
    if ($vlucht["VluchtNr"] > $max) {
        $max = $vlucht["VluchtNr"];
    }
}
?>
                <input type="number" class="form-control" name="VluchtNr" id="VluchtNr" value="<?php echo $max + 1; ?>" min="<?php echo $max + 1; ?>" readonly/>
            </div>
            <div class="form-group">
                <label for="Vluchtdatum">Vluchtdatum</label>
                <input type="date" class="form-control" name="Vluchtdatum" id="Vluchtdatum">
            </div>
            <div class="form-group">
                <label for="BestemmingID">Bestemming</label>
                <select class="form-control" name="BestemmingID" id="BestemmingID">
                    <?php foreach ($bestemmingen as $bestemming) {?>
                        <option value="<?php print($bestemming["BestemmingID"])?>">
                            <?php print($bestemming["Voluit"])?>
                        </option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="VliegtuigID">Vliegtuig</label>
                <select class="form-control" name="VliegtuigID" id="VliegtuigID">
                <?php foreach ($vliegtuigen as $vliegtuig) {?>
                        <option value="<?php print($vliegtuig["VliegtuigID"])?>">
                            <?php print($vliegtuig["InterneCode"])?>
                        </option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Add Flight" />
            </div>
        </form>
    </section>
</main>
<?php require_once 'views/shared/_footer.inc';?>