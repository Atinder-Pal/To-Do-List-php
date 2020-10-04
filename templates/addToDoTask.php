<h2>Add new Task to your List!</h2>
<form action="#" method="POST">
    <label for="newTask">
        Add new task:
       <?php //Thanks to Birm for suggesting 'autofocus'?>
        <input id="newTask" type="text" value="" name="newTask" placeholder="New Task" autofocus required>
    </label>
    <input type="submit" name="addTask" value="Add to List">
    <input type="submit" name="reset" value="Reset">
</form>


