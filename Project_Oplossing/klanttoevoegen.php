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
    
    header("location:login.php");
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
    <section id="summary" class="container">
        <h1>registeren</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                
<?php
$max = 0;

//Zoek het grootste vluchtnummer.
foreach ($klanten as $klant) {
    if ($klant["KlantID"] > $max) {
        $max = $klant["KlantID"];
    }
}
?>        <div class="form-group">
				<label for="VNaam">Voornaam</label>
				<input type="text" id="VNaam" name="VNaam" class="form-control" placeholder="jan">
			</div>
			<div class="form-group">
				<label for="FNaam">Familienaam</label>
				<input type="text" id="FNaam" name="FNaam" class="form-control" placeholder="de groote">
			</div>
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="Email" id="Email" name="Email" class="form-control">
			</div>
			<div class="form-group">
				<label for="Email">Confirm Email</label>
				<input type="Email" id="Email" name="Email" class="form-control">
			</div>
			<div class="form-group">
				<label for="paswoord">Paswoord</label>
				<input type="password" id="paswoord" name="paswoord" class="form-control" placeholder="Minimum 5 characters">
			</div>
			<div class="form-group">
				<label for="paswoord-confirm">Confirm Paswoord</label>
				<input type="password" id="paswoord" name="paswoord" class="form-control">
			</div>
			<div class="form-group">
			<div class="checkbox">
				<label>
				<input id="termsOfUse" type="checkbox" name="termsOfUse"> Yes, I agree to terms of use.
			    </label>
			</div>
			</div>
				<input type="submit" value="Sign Up" class="btn btn-primary">
					</form>
		</div>
	</div>
</div>
</form>
</section>
</main>
<?php require_once 'views/shared/_footer.inc';?>