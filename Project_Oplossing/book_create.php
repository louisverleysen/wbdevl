<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["BoekID"] = $_POST["BoekID"];
    $lijn["Schrijver"] = $_POST["Schrijver"];
    $lijn["Titel"] = $_POST["Titel"];
    $lijn["Type"] = $_POST["Type"];
    $lijn["Genre"] = $_POST["Genre"];
   

    $result = CallAPI("POST", $DB . "/tblboeken", json_encode($lijn));
    
    header("location:book_viewlogin.php");
    exit;
} else {
    $boeken = CallAPI("GET", $DB . "/tblboeken");
    $informatie = CallAPI("GET", $DB . "/tblboekinformatie");

    
}
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_navinlog.inc';?>
</header>
<main>
    <section id="summary" class="container pt-3">
        <h1>Boeken toevoegen</h1>
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
                <input type="number" class="form-control" name="BoekID" id="BoekID" value="<?php echo $max + 1; ?>" min="<?php echo $max + 1; ?>" readonly/>
            </div>
            <div class="form-group">
                <label for="Schrijver">Schrijver</label>
                <input type="text" class="form-control" name="Schrijver" id="Schrijver">
            </div>
            <div class="form-group">
                <label for="Titel">Titel</label>
                <input type="text" class="form-control" name="Titel" id="Titel">
            </div>
            <div class="form-group">
                <label for="Type">Type</label>
                <select class="form-control" name="Type" id="Type">
                    <?php foreach ($boeken as $boek) {?>
                        <option value="<?php print($boek["Type"])?>">
                            <?php print($boek["Type"])?>
                        </option>
                    <?php }?>
                </select>
            </div>
           
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="ADD Boek" />
            </div>
        </form>
    </section>
</main>
<footer>
<?php require_once 'views/shared/_footer.inc';?>
</footer>
