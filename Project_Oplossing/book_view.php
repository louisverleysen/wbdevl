<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php

$boeken = CallAPI("GET", $DB . "/tblboeken");

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
    <div class="jumbotron primary mb-0 rounded-0">
    <h1 class="display-3 font-weight-bold">Bosnian Cuisine</h1>
    <p class="lead">Traditional Bosnian food is often prepared with meat, and meals are plentiful and delicious. The meat is of extraordinary quality, often organic, and well prepared.</p>
    <hr class="my-4">
    <p>Food and Drink in Bosnia and Herzegovina</p>
    <p class="lead">
      <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
</div>
<?php
//Indien een record verwijderd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["delete"])) {
    if ($_GET["delete"] == "yes") {
        ?>
        <div class="alert alert-success">
        <strong>Verwijderen Succesvol!</strong> Geselecteerde boek verwijderd.
        </div>
        <?php

    } elseif ($_GET["delete"] == "no") {
        ?>
        <div class="alert alert-danger">
        <strong>Verwijderen niet mogelijk!</strong> Dit boek kan niet verwijderd worden.
        </div>
        <?php
}
}
//Indien een record geëditeerd wordt, geven we een melding indien dit gelukt is of niet.
if (!empty($_GET["edit"])) {
    if ($_GET["edit"] == "yes") {
        ?>
        <div class="alert alert-success">
        <strong>Editeren Succesvol!</strong> Geselecteert boek aangepast.
        </div>
        <?php

    } elseif ($_GET["edit"] == "no") {
        ?>
        <div class="alert alert-danger">
        <strong>Editeren niet mogelijk!</strong> Geselecteerde boek kan niet aangepast worden.
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
                    <th>like/dislike</th>
                    <th>meer info</th>
                    <!--<th>Delete</th>
                    <th>Edit</th>-->
                </tr>
            </thead>
            <tbody>
<?php
//Overlopen van de vluchten en tonen van de gegevens.
foreach ($boeken as $boek) {
    ?>
                <tr> 
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    <td>
                    <a href="book_like.php?id=<?php print($boek["BoekID"])?>"><i class="fas fa-thumbs-up"></i> </a> 
                    <?php print($boek["Liked"])?>
    
                        <a href="book_dislike.php?id=<?php print($boek["BoekID"])?>"><i class="fas fa-thumbs-down"></i></a>
                        <?php print($boek["Disliked"])?>
                    </td>
                    <td>
                    <a href="infoboek.php?id<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    
                    <!--<td><a href="book_delete.php?boekID=<?php print($boek["BoekID"])?>">Del</a></td>-->
                    <!--<td><a href="book_edit.php?boekID=<?php print($boek["BoekID"])?>">Edit</a></td>-->
                </tr>
<?php
}

?>
            </tbody>
        </table>
    </section>
</main>
<?php include_once 'views/shared/_footer.inc';?>