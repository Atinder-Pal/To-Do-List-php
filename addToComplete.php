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
            //Thanks to Birm, Fahad and Ummer for explaining concept of '...' operator
            $_SESSION['completedList'] = [...$_SESSION['completedList'],...$_POST['completedTasks']];            
        }
        
        //var_dump($_SESSION['completedList']);
    }
?>
<h3>Completed To-Dos</h3>
<?php if ( isset($_SESSION['completedList']) ) : ?>
    <ul>
        <?php foreach ( $_SESSION['completedList'] as $completedTask ) : ?>
            <li> <?php echo $completedTask; ?> </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>