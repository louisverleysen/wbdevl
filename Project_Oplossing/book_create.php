<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["BoekID"] = $_POST["BoekID"];
    $lijn["Schrijver"] = $_POST["Schrijver"];
    $lijn["Type"] = $_POST["Type"];
    $lijn["Genre"] = $_POST["Genre"];
   

    $result = CallAPI("POST", $DB . "/tblboek", json_encode($lijn));
    
    header("location:book_view.php");
    exit;
} else {
    $boeken = CallAPI("GET", $DB . "/tblboeken");
    $informatie = CallAPI("GET", $DB . "/tblboekeninformatie");
    $prijsinfo = CallAPI("GET", $DB . "/tblkostprijs");
}
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>
<main>
    <section id="summary" class="container">
        <h1>Book Creator</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="BoekID">boeken-code</label>
<?php
$max = 0;

//Zoek het grootste vluchtnummer.
foreach ($boeken as $boek) {
    if ($boek["BoekID"] > $max) {
        $max = $boek["BoekID"];
    }
}
?>
                <input type="number" class="form-control" name="VluchtNr" id="VluchtNr" value="<?php echo $max + 1; ?>" min="<?php echo $max + 1; ?>" readonly/>
            </div>
            <div class="form-group">
                <label for="Schrijver">Schrijver</label>
                <input type="date" class="form-control" name="Schrijver" id="Schrijver">
            </div>
            <div class="form-group">
                <label for="Type">Type</label>
                <select class="form-control" name="Type" id="Type">
                    <?php foreach ($informatie as $info) {?>
                        <option value="<?php print($info["Type"])?>">
                            <?php print($info["PrijsVooBoek"])?>
                        </option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="Genre">Genre</label>
                <select class="form-control" name="Genre" id="Genre">
                <?php foreach ($prijsinfo as $prijs) {?>
                        <option value="<?php print($prijs["omschrijving"])?>">
                            <?php print($prijs["Type"])?>
                        </option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Add book" />
            </div>
        </form>
    </section>
</main>
<?php require_once 'views/shared/_footer.inc';?>