<?php require_once 'scripts/config.php';?>
<?php require_once 'scripts/api.php';?>


<?php require_once 'views/shared/_header.inc';?>
<body>
<header>
	<?php include 'views/shared/_nav.inc';?>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
             <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASWOORD</label>
                                <input type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary"><a href="ingelogt.php">LOGIN</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>





<?php include_once 'views/shared/_footer.inc';?>