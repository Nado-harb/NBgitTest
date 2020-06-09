<?php
include 'Metier.php';
include 'initSession.php';
        if (isset($_GET['end']))
            $UC = 'END';
        if ($UC == 'END') {
            header('Location:menu_view.html');          
        }
        $UC = 'FIRSTEDIT';
        if (isset($_GET['add']))
            $UC = 'ADD';

        if (isset($_GET['delete']))
            $UC = 'DELETE';
        

        
        if ($UC == 'FIRSTEDIT') {
            include 'TodoAdded.php';
            include 'form_add_todo.html';
        }


        
        if ($UC == 'ADD') {
            $titre = $_GET['titre'];
            $description = $_GET['description'];
            $categorie = $_GET['categorie'];

            $todo = new TODO($titre, $description, $categorie);
            $listTodo->add($todo);

            include 'TodoAdded.php';
            include 'form_add_todo.html';
        }

        if ($UC == 'DELETE') {
            $index = $_GET['index'];
            $listTodo->delTODO($index);

            include 'TodoAdded.php';
            include 'form_add_todo.html';
        }
        ?>

        I'm in edit todo page
</html>
