<?php
    session_start();
    //check if $_SESSION['task'] has been set or not, if not-set it to an array
    if ( !isset( $_SESSION['task'] ) )
    {
        $_SESSION['task'] = array();
    }
    //check if their a submission via "POST" and the $_POST['newTask'] is not submitted empty
    if( !empty($_POST) && $_POST['newTask'] != '' )
    {
        array_push($_SESSION['task'], $_POST['newTask'] );
    }
    
?>
<h3>To-Do List</h3>

<!--For TESTING: var_dump($_SESSION['task']); -->
<?php if ( isset($_SESSION['task']) ) : ?>
    <ul>
        <?php foreach ( $_SESSION['task'] as $newTask ) : ?>
            <li>
                <?php echo $newTask; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
   
      
