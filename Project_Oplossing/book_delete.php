<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';


if (!empty($_GET["boekID"])) {
    $boeknummer = $_GET["boekID"];
    $test = CallAPI("DELETE", $DB . "/tblboeken/" . $boeknummer);
    print($test);
    if ($test != 0) {
        header("location:" . preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . "?delete=yes");
    } else {
        header("location:" . preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . "?delete=no");
    }
}
