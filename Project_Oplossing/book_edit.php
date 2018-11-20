<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if(!empty($_GET["boekID"])){
    $Boek = CallAPI("GET", $DB ."/tblboeken/".$_GET["boekID"]);
}
    else{
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $lijn = array();
        $lijn["BoekID"] = $_POST["BoekID"];
        $lijn["Schrijver"] = $_POST["Schrijver"];
        $lijn["Titel"] = $_POST["Titel"];
        $lijn["Type"] = $_POST["Type"];
        

        $result = CallAPI("PUT", $DB ."/tblboeken/".$_POST["BoekID"], json_encode($lijn));
        print($result);

        if($result == "1"){
            header("location:book_view.php?edit=yes");
        }
        else{
            header("location:book_view.php?edit=no");
        }
        exit;
    }
}
?>
<?php require_once 'views/shared/_header.inc';?>

<body>
<header>
<?php include_once 'views/shared/_navinlog.inc';?>
</header>
<section id="summary" class="container pt-3">
        <h1>boek aanpassen</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="BoekID">BoekNr</label>
                <input type="number" class="form-control" name="BoekID" id="BoekID" value="<?php echo $Boek["BoekID"] ?>" readonly />
            </div>
            <div class="form-group">
                <label for="Schrijver">Schrijver</label>
                <input type="text" class="form-control" name="Schrijver" id="Schrijver"  value="<?php echo $Boek["Schrijver"] ?>">
            </div>
            <div class="form-group">
                <label for="Titel">Titel</label>
                <input type="text" class="form-control" name="Titel" id="Titel" value="<?php echo $Boek["Titel"] ?>">
            </div>
            <div class="form-group">
                <label for="Type">Type</label>
                <select class="form-control" name="Type" id="Type">
                    <?php foreach ($Boek as $boek) {?>
                        <option value="<?php print($boek["Type"]) ?>"<?php if($boek["Type"]==$Boek["Type"]){print("selected");} ?>></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Update boek" />
            </div>
        </form>
    </section>
</main>
<footer>
<?php require_once 'views/shared/_footer.inc';?>
</footer>
