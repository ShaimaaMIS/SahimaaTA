<?php

session_start();

if (isset($_POST['TODOLIST']))
{
$Task_ALL = $_POST['TODOLIST'];
}
else 

$Task_ALL = array();
$new_task = $_POST['newtask'];
$Task_ALL[] = $new_task;

//array_fill_keys($keys,"$new_task");
session_destroy();
?>


<html>
<body>
<form  method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

        <?php foreach($Task_ALL as $Task) : ?>
        <input type="hidden" name="TODOLIST[]" value="<?php echo $Task;?>"/>
		<li><?php echo $Task; ?></li>
        <?php endforeach; ?>
      
        <label>Task:</label>
        <input type="text" name="newtask" id="newtaskID" /> <br />
        <input type="submit" value="Add Task"/>
</form>
</html>
</body>


 