<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
/*if ($_SERVER['REQUEST_METHOD'] === "POST") {
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

   
} */
?>
<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_navinlog.inc';?>
</header>
<main>




</main>    
</body>

<?php include_once 'views/shared/_footer.inc';?>