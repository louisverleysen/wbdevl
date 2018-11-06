<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
if(!empty($_GET["boekid"])){
    $boeken =  CallAPI("GET", $DB ."/tblboeken");
    $vlucht = CallAPI("GET", $DB ."/tblboeken/".$_GET["boekid"]);
}
    else{
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $lijn = array();
        $lijn["BoekID"] = $_POST["BoekID"];
        $lijn["Schrijver"] = $_POST["Schrijver"];
        $lijn["Titel"] = $_POST["Titel"];
        $lijn["Type"] = $_POST["Type"];
        $lijn["Genre"] = $_POST["Genre"];

        $result = CallAPI("PUT", $DB ."/tblboeken/".$_POST["BoekID"], json_encode($lijn));
        //print($result);
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
<?php include 'views/shared/_nav.inc';?>
</header>
