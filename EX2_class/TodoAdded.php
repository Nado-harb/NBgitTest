<?php
echo '<table>';
foreach($listTodo->list as $index => $todo){
    echo '<tr><td>'.$todo->titre.'</td>';
        echo '<td>'.$todo->description.'</td>';
    echo '<td>'.$todo->categorie.'</td></tr>';
    echo '<td><a href="editTodo.php?delete=true&index='.$index.'">del</a></td>';
}
echo '</table>';
?>
