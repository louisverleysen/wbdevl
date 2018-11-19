<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
$lijn = array();





?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    //$lijn["BoekID"] = $_POST["BoekID"];
    //$lijn["Liked"] = $_POST["Liked"];

    if(!empty($_POST)){
        $lijn['BoekID'] = $_POST['BoekID'];
        $lijn['Liked'] = $_POST['like'];
        header("location:book_view.php");
    }
   
    $result = CallAPI("POST", $DB . "/tblboeken", json_encode($lijn));
    header("location:book_view.php");
    
    exit;
} else {
    $boeken = CallAPI("GET", $DB . "/tblboeken");   
} 
?>




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
$max = 0;
//Zoek het grootste winkelID.
foreach ($boeken as $boek) {
    if ($boek["Liked"] > $max) {
        $max = $boek["Liked"];
    }
}
?>

<?php echo $max + 1; ?>  
