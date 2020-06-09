<?php
include 'Metier.php';
include 'initSession.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$cat=$_GET['cat'];
$foundTODO=$listTodo->getTODOByCategory($cat);
echo '<table>';
foreach($foundTODO as $todo){
echo '<tr><td>'.$todo->titre.'</td>';
        echo '<td>'.$todo->description.'</td>';
   if ($cat=="all"){
        echo '<td>'.$todo->categorie.'</td></tr>';}
}
        ?>
    </body>
</html>
