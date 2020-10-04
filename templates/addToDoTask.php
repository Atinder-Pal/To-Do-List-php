<?php
    $errorMessage = '';
//    if( $_POST['newTask'] == '' ) 
//    {
//         $errorMessage = "Please type a task to add!";
//    }
   if( in_array(strToLower($_POST['newTask']), array_map('strtolower', $_SESSION['task'])) )
   {
        $errorMessage = "Task is already added to To-Do List! ";
   }
?>
    <section>
        <h2>Add new Task to your List!</h2>
        <form action="#" method="POST">
            <label for="newTask">
                Add new task:
            <?php //Thanks to Birm for suggesting 'autofocus'?>
                <input id="newTask" type="text" value="" name="newTask" placeholder="New Task" autofocus>
            </label>
            <input type="submit" name="addTask" value="Add to List" id="add-task-button">
            <input type="submit" name="reset" value="Reset" id="reset-button">
        </form>
        <p><?php echo $errorMessage ?></p>
    </section>

