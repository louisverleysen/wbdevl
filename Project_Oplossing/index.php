<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<main>
    <section class="container">
        <h1>boeken beurs</h1>
        <p>Hieronder kan je de verschillende tabellen zien die je kan ondervragen via de API.</p>
        <ul>
            <li><a href="<?php print($DB)?>/tblboeken">tblboeken</a></li>
            <li><a href="<?php print($DB)?>/tblboekinformatie">tblboekinformatie</a></li>
            <li><a href="<?php print($DB)?>/tblklant">tblklant</a></li>
            <li><a href="<?php print($DB)?>/tblkostprijs">tblkostprijs</a></li>
            <li><a href="<?php print($DB)?>/tblverkoper">tblverkoper</a></li>
            <li><a href="<?php print($DB)?>/tblverkoperstype">tblverkoperstype</a></li>
           
        </ul>
    </section>
</main>
<?php include_once 'views/shared/_footer.inc';?>