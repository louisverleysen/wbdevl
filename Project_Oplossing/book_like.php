<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>

<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>
<?php
// toon alle fouten & meldingen ivm php code
date_default_timezone_set('Europe/Brussels');
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $lijn = array();
    $lijn["Liked"] = $_POST["Liked"];
    
   

    $result = CallAPI("POST", $DB . "/tblboeken", json_encode($lijn));
    
    header("location:book_view.php");
    exit;
} else {
    $klanten = CallAPI("GET", $DB . "/tblklant"); 
}
?>