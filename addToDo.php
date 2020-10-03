<?php
    session_start();

    if ( !isset( $_SESSION['task'] ) )
    {
        $_SESSION['task'] = array();
    }

    if( !empty($_POST) )
    {
        array_push($_SESSION['task'], $_POST['newTask'] );
    }
    
?>
<h3>To-Do List</h3>
<?php 
    var_dump($_SESSION['task']);
?>