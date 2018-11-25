<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
include_once("logins.inc");
$logins = get_logins();

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
<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_navinlog.inc';?>
</header>
<main>
<section class="container p-4">
<h1>welkom <?php print($naam) ?>! <br><small>klik hier om uiteloggen</small></h1>
<form method="POST" action="<?php print($_SERVER['PHP_SELF']);?>"> 
    
    <div class="input-group mt-3">
    <a  href="login.php"  ><button type="button" class="btn btn-info">Logout </button></a>
    </div>
</form>
</section>
</main>

<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>

</body>
</html>