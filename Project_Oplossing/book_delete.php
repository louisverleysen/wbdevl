
<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';

if (!empty($_GET["vluchtnr"])) {
    $vluchtnummer = $_GET["vluchtnr"];
    $test = CallAPI("DELETE", $DB . "/tblvlucht/" . $vluchtnummer);
    print($test);
    if ($test != 0) {
        header("location:" . preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . "?delete=yes");
    } else {
        header("location:" . preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . "?delete=no");
    }
}
