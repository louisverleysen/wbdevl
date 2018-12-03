<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
$uwid = $_GET["WinkelID"];
$boeken = CallAPI("GET", $DB . "/tblboeken/WinkelID/" . $uwid );

print_r($boeken);
print_r($uwid);


?>

<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<main>
    <section id="summary" class="container">
<head>
<?php include 'views/shared/_head_boeken.inc';?>
</head>
<table class="table table-striped table-hover sortable">
            <thead>
                <tr>
                    <th>WinkelID</th>
                    <th>Schrijver</th>
                    <th>Titel</th>
                    <th>Type</th>
                    <th>like/dislike</th>
                    <th>meer info</th>
                </tr>
            </thead>
            <tbody>


<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>