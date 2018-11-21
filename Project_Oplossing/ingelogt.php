<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
$logins = CallAPI("GET", $DB . "/tblklant");
session_start();
?>

<?php
if(empty($_SESSION["Email"])){
    if(empty($_COOKIE["Email"])){
        header("location:login.php");
        exit;
    }else{
        $login = $_COOKIE["Email"];
        $_SESSION["Email"] = $login;
        
    }
    $naam = $logins[$login][0]." ".$logins[$login][1];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>
<body class="container">
    <h1>welkom <?php print($naam) ?>!</h1>
    <form method="POST" action="<?php print($_SERVER['PHP_SELF']);?>"> 
    
        <div class="input-group mt-3">
            <input class="btn btn-primary" type="submit" value="logout" name="logout" />
        </div>
    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl"
        crossorigin="anonymous"></script>
</body>
</html>