<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<main>
    <section class="container">
        <h1>Flight Booker</h1>
        <p>Hieronder kan je de verschillende tabellen zien die je kan ondervragen via de API.</p>
        <ul>
            <li><a href="<?php print($DB)?>/tblbestemming">tblbestemming</a></li>
            <li><a href="<?php print($DB)?>/tblhuidigeprijssetting">tblhuidigeprijssetting</a></li>
            <li><a href="<?php print($DB)?>/tblklant">tblklant</a></li>
            <li><a href="<?php print($DB)?>/tblvliegtuig">tblvliegtuig</a></li>
            <li><a href="<?php print($DB)?>/tblvlucht">tblvlucht</a></li>
            <li><a href="<?php print($DB)?>/tblvluchtinformatie">tblvluchtinformatie</a></li>
            <li><a href="<?php print($DB)?>/tblwerknemer">tblwerknemer</a></li>
            <li><a href="<?php print($DB)?>/tblwerknemertypes">tblwerknemertypes</a></li>
        </ul>
    </section>
</main>
<?php include_once 'views/shared/_footer.inc';?>