<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
$uwid = $_GET["WinkelID"];
$winkel = CallAPI("GET", $DB . "/tblwinkel/"  . $uwid );
$boeken = CallAPI("GET", $DB . "/tblboeken/"   );



function findInArray($arr, $value, $column = 1)
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
<head>
<?php include 'views/shared/_head_winkel.inc';?>
</head>
<table class="table table-striped table-hover sortable">
            <thead>
                <tr>
                    <th>Winkel Naam</th>
                    <th>Schrijver</th>
                    <th>Titel</th>
                    <th>Type</th>
                    <th>meer info</th>
                </tr>
            </thead>
            <tbody>
<?php
    switch ($uwid) {
        case 1:
            if($uwid == 1 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 1){
                        ?>
                    <tr>
                    <td><?php print($winkel["Naam"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;

            case 2:
            if($uwid == 2 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 2){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 3:
            if($uwid == 3 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 3){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 4:
            if($uwid == 4 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 4){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 5:
            if($uwid == 5 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 5){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 6:
            if($uwid == 6 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 6){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 7:
            if($uwid == 7 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 7){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 8:
            if($uwid == 8 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 8){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
            case 9:
            if($uwid == 9 ):
                foreach($boeken as $boek){
                    if($boek["WinkelID"] == 9){
                        ?>
                    <tr>
                    <td><?php print($boek["BoekID"])?></td>
                    <td><?php print($boek["Schrijver"])?></td>
                    <td><?php print($boek["Titel"])?></td>
                    <td><?php print($boek["Type"])?></td>
                    
                    
                    
                    
                    <td>
                    <a  href="infoboek_per_id.php?BoekID=<?php print($boek["BoekID"])?>"><button type="button" class="btn btn-info">Details...</button></a>
                    </td>
                    </tr>
                   <?php 
                    }   
            }
            
            endif;
            break;
    }

?>


</table>
</main>

<footer>
<?php include_once 'views/shared/_footer.inc';?>
</footer>    
</body>