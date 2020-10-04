<?php
    session_start();
    if ( !isset( $_SESSION['completedList'] ) )
    {
        $_SESSION['completedList'] = array();
    }
    if( isset($_POST['complete']) )
    {
        if( !empty($_POST['completedTasks']) )
        {
            // foreach($_POST['completedTasks'] as $completedTask)
            // {
            //     echo $completedTask."</br>";
            // }
            //Thanks to Birm, Fahad and Ummer for explaining concept of '...' operator
            $_SESSION['completedList'] = [...$_SESSION['completedList'],...$_POST['completedTasks']];            
        }
        
        //var_dump($_SESSION['completedList']);
    }
?>
<h3>Completed To-Dos</h3>
<?php if ( isset($_SESSION['completedList']) ) : ?>
    <ul>
        <?php foreach ( $_SESSION['task'] as $newTask ) : ?>
            <li>
            <input type="checkbox" name="completedTasks[]" value='<?php echo $newTask; ?>'><?php echo $newTask; ?></input>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>