<?php
    session_start();
    //check if $_SESSION['task'] has been set or not, if not-set it to an array
    if ( !isset( $_SESSION['task'] ) )
    {
        $_SESSION['task'] = array();
    }
      
    //check if there is a submission via "POST" and the $_POST['newTask'] is not submitted empty 
    // also check if the submitted task is not present in the list already
    // Citation
    // https://stackoverflow.com/questions/2166512/php-case-insensitive-in-array-function
    // I did not know how to use in_array method to make my search case-insensitive
    // Above website shows a solution to first change all elements in array to lowercase
    // by using array_map('strtolower',$array_name)
    // and then passing this directly to in-array method
    if( !empty($_POST) && $_POST['newTask'] != '' 
        && !(in_array(strToLower($_POST['newTask']), array_map('strtolower', $_SESSION['task']))))
    {
        array_push($_SESSION['task'], $_POST['newTask'] );
    }
    // End Citation
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
   
      
