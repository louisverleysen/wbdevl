<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
$uwid = $_GET["WinkelID"];
$boeken = CallAPI("GET", $DB . "/tblboeken/" . $uwid );


print($uwid)



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
<?php
$uwid=0
$tonen = array
foreach($boeken as $boek){
    if($boek["WinkelID"]) == 1){
        $tonen[] = $boek;
    }else{
        
    }
 
?>
                <tr> 
                    <td><?php print($boek["WinkelID"])?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <?php } ?>      
                    
                    <td>
                    <a href="book_like.php?id="><i class="fas fa-thumbs-up"></i> </a> 
                  
                    <a href="book_dislike.php?id="><i class="fas fa-thumbs-down"></i></a>
                       
                    </td>
                    <td>
                    <a  href="infoboek_per_id.php?BoekID="><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    
                    <!--<td><a href="book_delete.php?boekID=<?php print($boek["BoekID"])?>">Del</a></td>
                    <td><a href="book_edit.php?boekID=<?php print($boek["BoekID"])?>">Edit</a></td> -->
                </tr>
                 
            </tbody>
        </table>
        </section>

<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>