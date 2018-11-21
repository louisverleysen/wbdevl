<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>
<?php
$logins = CallAPI("GET", $DB . "/tblklant");
session_start();
?>
<?php
//POST ophalen indien de pagina gepost is
if(!empty($_POST)){
    print_r($_POST);

    if(!empty($_POST["Email"]) && array_key_exists($_POST["Email"],$logins))
    {
        //login bestaat
        print("login gevonden ");
    
    //contSZroleren of de login en paswoord overeen komen
    $login = $_POST['Email'];

    if($logins[$login][2]==md5($_POST["pwd"])){
        //print("login en pwd OK");
        $tijd = 0;
        if(!empty($_POST['keep'])){
            $tijd = time() + (31*24*60*60);
        }
        setcookie ("Email",$login, $tijd);
        header("location:ingelogt.php");
        exit;
    }
}
    else{
        print("Login niet gevonden");
    }
}


?>

<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>
<main>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
             <div class="col-lg-6 col-md-8 login-box mb-5">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">

                        <form method="POST" action="<?php print($_SERVER['PHP_SELF']);?>" >
                            <div class="form-group">
                                <label class="form-control-label" for="Email">EMAIL</label>
                                <input type="text" id="Email" name="Email" class="form-control" placeholder=" Email">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="pwd" >PASWOORD</label>
                                <input type="password" id="pwd" name="pwd" class="form-control" placeholder=" Paswoord">
                            </div>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input name="keep" id="keep" type="checkbox" for="keep" value="keep">
                                </div>
                            </div>
                            <label class="form-control"for="keep">ingelogd blijven</label>
                        </div>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-info">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

</main>
<footer>


<?php include_once 'views/shared/_footer.inc';?>
</footer>