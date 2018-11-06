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

if (isset($_GET['id']) == true){
    // maak connectie met de database
    require("scripts/DB_local.php");
	$stmt = $mysqli->prepare("UPDATE `tblboeken` SET `Liked`= `Liked` +1 WHERE BoekID=?");
    if($mysqli->error!==""){
        print("<p>Error: ".$mysqli->error."</p>");
    }
    $stmt->bind_param("i",$id);
// mapping
    $id = $_GET['id'];

    $stmt->execute();
    if(count($stmt->error_list)){
        print("<pre>");
        print_r($stmt->error_list);
        print("</pre>");
    }

    if($mysqli->affected_rows==1){
        echo "het liken is gelukt";
        header( "location:book_view.php" );
    }

    $stmt->close();
}else{
    echo "Je hebt een verkeerde link gevolgd.";
}
?>