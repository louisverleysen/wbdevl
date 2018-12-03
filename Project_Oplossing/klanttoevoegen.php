<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["KlantID"] = $_POST["KlantID"];
    $lijn["FNaam"] = $_POST["FNaam"];
    $lijn["VNaam"] = $_POST["VNaam"];
    $lijn["Email"] = $_POST["Email"];
    $lijn["password"] = $_POST["password"];
   

    $result = CallAPI("POST", $DB . "/tblklant", json_encode($lijn));
    print($result);
    if($result == "1"){
        header("location:klanttoevoegen.php?add=yes");
    }
    else{
        header("location:klanttoevoegen.php?add=no");
    }
    exit;
} else {
    $klanten = CallAPI("GET", $DB . "/tblklant"); 
}
?>
<body>
<?php require_once 'views/shared/_header.inc';?>  
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>


<main>
<?php
//Indien een record verwijderd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["add"])) {
    if ($_GET["add"] == "no") {
        ?>
        <div class="alert alert-success text-center m-4">
        <strong>Succesvol Geregistreert!</strong> U bent geregistreert.
        </div>
        <?php

    } elseif ($_GET["add"] == "yes") {
        ?>
        <div class="alert alert-danger">
        <strong>Verwijderen niet mogelijk!</strong> Dit boek kan niet verwijderd worden.
        </div>
        <?php
}
}
?>
<div class="container">
<div class="row">
  <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box mb-5">
        <div class="col-lg-12 login-key">
            <i class="fas fa-user-plus" aria-hidden="true"></i>
        </div>
        <div class="col-lg-12 login-title">
            Registreren
        </div>
        <div class="col-lg-12 login-form">
            <div class="col-lg-12 login-form">
            <form method="POST" action="<?php print($_SERVER['PHP_SELF']);?>" >
                <div class="form-group">
                    <?php
                    	date_default_timezone_set('Europe/Brussels');
                        error_reporting(E_ALL);
                        ini_set('display_errors', 'On');
                        $max = 0;
                        //Zoek het grootste vluchtnummer.
                        foreach ($klanten as $klant) {
                        if ($klant["KlantID"] > $max) {
                        $max = $klant["KlantID"];
                         }
                        }

                    ?>
                    <!-- <input type="number" class="form-control" name="KlantID" id="KlantID" value="<?php echo $max + 1; ?>" min="<?php echo $max + 1; ?>" readonly/> -->
                   <div class="form-group">
	                    <label class="form-control-label" for="VNaam">Voornaam</label>
	                    <input type="text" id="VNaam" name="VNaam" class="form-control" placeholder="Jan">
                    </div>
                    <div class="form-group">
	                    <label class="form-control-label" for="FNaam" >Familienaam</label>
	                    <input type="text" id="FNaam" name="FNaam" class="form-control" placeholder=" De groote">
                    </div>
                    <div class="form-group">
	                    <label class="form-control-label" for="Email" >Email</label>
	                    <input type="text" id="Email" name="Email" class="form-control" placeholder=" jan.degroote@gmail.com">
                    </div>
                    <div class="form-group">
	                    <label class="form-control-label" for="password" >Paswoord</label>
	                    <input type="password" id="password" name="password" class="form-control" placeholder=" *****">
                    </div>
                    <div class="form-group">
	                    <label class="form-control-label" for="password" >Confirm Paswoord</label>
	                    <input type="password" id="password-cofirm" name="password" class="form-control" placeholder=" *****">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input name="keep" id="keep" type="checkbox" for="keep" value="keep">
                            </div>
                        </div>
                        <label class="form-control"for="keep">ik aanvaard de voorwaarden</label> 
                    </div>
                    <div class="col-lg-12 loginbttm">
                      <div class="col-lg-6 login-btm login-text">
                      </div>
                      <div class="col-lg-6 login-btm login-button">
                        <input class="btn btn-outline-info" type="submit" value="Add bib" />                      
                      </div>
                    </div>
                </div>
                			 <script>
						var paswoord = document.getElementById("password"), confirm_paswoord = document.getElementById("password-confirm");

						function validatePassword(){
							if(paswoord.value != confirm_paswoord){
								confirm_paswoord.setCustomValidity("Paswoorden komen niet overeen");
							} else{
								confirm_paswoord.setCustomValidity('');
								}
							}

							paswoord.onchance = validatePassword;
							confirm_paswoord.onkeyup = validatePassword;
						
						</script>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
</main>
</body>
<footer>
<?php require_once 'views/shared/_footer.inc';?>
</footer>