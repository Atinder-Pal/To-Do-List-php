<?php
    session_start();
    require_once( './addToComplete.php' );
    //check if $_SESSION['task'] has been set or not, if not-set it to an array
    if ( !isset( $_SESSION['task'] ) )
    {
        $_SESSION['task'] = array();
    }
    // Citation
    // https://www.geeksforgeeks.org/how-to-call-php-function-on-the-click-of-a-button/
    // Above source shows how to call a php function on click of a button using php only (no JS)
    if( isset( $_POST['addTask'] ))
    {
        pushToSession();
    }
    elseif( isset( $_POST['reset'] )) 
    {
        // Citation
        //https://www.w3schools.com/php/php_sessions.asp
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy(); 
        // End Citation
    }  
    //End Citation  
    elseif( isset($_POST['complete']) )
    {
        addToCompletedList();
    }
    function pushToSession()
    {
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
    }
    // if( isset($_POST['complete']) )
    // {
    //     if( !empty($_POST['completedTasks']) )
    //     {   
    //         $_SESSION['task'] = array_values(array_diff($_SESSION['task'], $_SESSION['completedList']));
    //         //var_dump( $_SESSION['task'] ); 
    //     }
    // }
?>
<h3>To-Do List</h3>

<!--For TESTING: var_dump($_SESSION['task']); -->

<form action="#" method = "POST">
    <input type="submit" name="complete" value="Completed!">
    <?php if ( isset($_SESSION['task']) ) : ?>
    <ul>
        <?php foreach ( $_SESSION['task'] as $newTask ) : ?>
            <li>
                <input type="checkbox" name="completedTasks[]" value='<?php echo $newTask; ?>'>
                    <?php echo $newTask; ?>
                </input>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</form>
    
   
      
