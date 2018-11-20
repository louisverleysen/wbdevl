<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["KlantID"] = $_POST["KlantID"];
    $lijn["FNaam"] = $_POST["FNaam"];
    $lijn["VNaam"] = $_POST["VNaam"];
    $lijn["Email"] = $_POST["Email"];
    $lijn["paswoord"] = $_POST["paswoord"];
   

    $result = CallAPI("POST", $DB . "/tblklant", json_encode($lijn));
    print_r($result);
    header("location:klanttoevoegen.php");
    exit;
} else {
    $klanten = CallAPI("GET", $DB . "/tblklant"); 
}
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>
<main>
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
	<label class="form-control-label" for="Email" >Confirm Email</label>
	<input type="text" id="Email" name="Email" class="form-control" placeholder=" jan.degroote@gmail.com">
</div>
<div class="form-group">
	<label class="form-control-label" for="paswoord" >Paswoord</label>
	<input type="password" id="paswoord" name="paswoord" class="form-control" placeholder=" *****">
</div>
<div class="form-group">
	<label class="form-control-label" for="paswoord" >Confirm Paswoord</label>
	<input type="password" id="paswoord" name="paswoord" class="form-control" placeholder=" *****">
</div>
	<div class="input-group mb-3">
	<div class="input-group-prepend">
		<div class="input-group-text">
		<input name="keep" id="keep" type="checkbox" for="keep" value="keep">
	</div>
	</div>
    <label class="form-control"for="keep">aanvaard de voorwaarden</label>
        </div>
          <div class="col-lg-12 loginbttm">
           <div class="col-lg-6 login-btm login-text">
           <!-- Error Message -->
             </div>
               <div class="col-lg-6 login-btm login-button">
                 <button type="submit" value="Sing Up" class="btn btn-outline-info"><a href="klanttoevoegen.php">Registreer</a></button>
              </div>
		</div>
							<!--	<script>
						var paswoord = document.getElementById("paswoord"), confirm_paswoord = document.getElementById("paswoord");

						function validatePassword(){
							if(paswoord.value != confirm_paswoord){
								confirm_paswoord.setCustomValidity("Paswoorden komen niet overeen");
							} else{
								confirm_paswoord.setCustomValidity('');
								}
							}

							paswoord.onchance = validatePassword;
							confirm_paswoord.onkeyup = validatePassword;
						
						</script>-->
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</main>
<footer>
<?php require_once 'views/shared/_footer.inc';?>
</footer>