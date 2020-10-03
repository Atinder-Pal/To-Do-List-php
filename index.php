<?php

session_start();

// Show Header
include dirname(__FILE__).'/templates/header.php';

// Show Form to submit new task to List
include dirname(__FILE__).'/templates/form.php';

//Show To-Do List and add tasks to it as we submit new tasks via form
include dirname(__FILE__).'/addToDo.php';

// Show Footer
include dirname(__FILE__).'/templates/footer.php';