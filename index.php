<?php

session_start();

// Show Header
include dirname(__FILE__).'/templates/header.php';

// Show Form to submit new task to List
include dirname(__FILE__).'/templates/addToDoTask.php';

//Show To-Do List and add tasks to it as we submit new tasks via form
include dirname(__FILE__).'/addToActiveList.php';

// Show Completed To-Dos
include dirname(__FILE__).'/displayCompletedList.php';

// Show Footer
include dirname(__FILE__).'/templates/footer.php';