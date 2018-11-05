<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php

$boeken = CallAPI("GET", $DB . "/tblboeken");
$informatie = CallAPI("GET", $DB . "/tblboekinformatie");
$prijsinfo = CallAPI("GET", $DB . "/tblkostprijs");

function findInArray($arr, $value, $column = 0)
{
    $nr = 0;
    foreach ($arr as $item) {
        if ($item[$column] == $value) {
            return $nr;
        }
        $nr++;
    }
}
?>
<?php include_once 'views/shared/_header.inc';?>
<body>
<header>
    <?php include_once 'views/shared/_nav.inc';?>
</header>
<main>
    <section id="summary" class="container">
        <h1>Boeken Overzicht</h1>
<?php
//Indien een record verwijderd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["delete"])) {
    if ($_GET["delete"] == "yes") {
        ?>
        <div class="alert alert-success">
        <strong>Verwijderen Succesvol!</strong> Geselecteerde vlucht verwijderd.
        </div>
        <?php

    } elseif ($_GET["delete"] == "no") {
        ?>
        <div class="alert alert-danger">
        <strong>Verwijderen niet mogelijk!</strong> Deze vlucht kan niet verwijderd worden.
        </div>
        <?php
}
}
//Indien een record geëditeerd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["edit"])) {
    if ($_GET["edit"] == "yes") {
        ?>
        <div class="alert alert-success">
        <strong>Editeren Succesvol!</strong> Geselecteerde vlucht aangepast.
        </div>
        <?php

    } elseif ($_GET["edit"] == "no") {
        ?>
        <div class="alert alert-danger">
        <strong>Editeren niet mogelijk!</strong> Geselecteerde vlucht kan niet aangepast worden.
        </div>
        <?php
}
}
?>
        <table class="table table-striped table-hover sortable">
            <thead>
                <tr>
                    <th>BoekID</th>
                    <th>Schrijver</th>
                    <th>Titel</th>
                    <th>Type</th>
                    <th>Genre</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
<?php
//Overlopen van de vluchten en tonen van de gegevens.
foreach ($boeken as $boek) {
    $info = findInArray($informatie,$boek["BoekID"],"BoekID")?>
                <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($informatie[$info]["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    <td><?php print($boek["Genre"])?></td>

                    <td><a href="book_delete.php?boekID=<?php print($boek["BoekID"])?>">Del</a></td>
                    <td><a href="book_edit.php?boekID=<?php print($boek["BoekID"])?>">Edit</a></td>
                </tr>
<?php
}

?>
            </tbody>
        </table>
    </section>
</main>
<?php include_once 'views/shared/_footer.inc';?>