<?php
    session_start();
    function addToCompletedList()
    {
        if ( !isset( $_SESSION['completedList'] ) )
        {
            $_SESSION['completedList'] = array();
        }
        
        if( !empty($_POST['completedTasks']) )
        {            
            //Thanks to Birm, Fahad and Ummer for explaining concept of '...' operator
            $_SESSION['completedList'] = [...$_SESSION['completedList'],...$_POST['completedTasks']]; 
            
            // Citation
            // http://kajstrom.fi/2018/05/29/delete-an-item-from-an-array-without-a-loop-in-php/
            // How to delete items from array without knowing index
            $_SESSION['task'] = array_values(array_diff($_SESSION['task'], $_SESSION['completedList']));
            // End Citation
            
            // ========Another method to delete items from Array=======
            // foreach ( $_POST['completedTasks'] as $completedTask )
            // {
            //     // Citation
            //     // https://www.daniweb.com/programming/web-development/threads/413529/               remove-single-element-in-session-array
            //     //Got to know about array_search function from above source
            //     $index = array_search($completedTask,$_SESSION['task']);
            //     unset($_SESSION['task'][$index]);
            //     //End Citation                
            // }  
            // =============================================================
        }
    }  
?>
