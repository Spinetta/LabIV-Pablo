<?php 
namespace process;
require_once("../config/autoload.php");

use config\autoload as Autoload;
use repositories\taskRepository as taskRepository;
use models\Task as Task;


if($_POST)
{
	$newTask = new Task($_POST['title'],$_POST['date'],$_POST['description'],$_POST['reminder']);
	$repository = new taskRepository();
	$repository->add($newTask);

	echo "Se agrego un tarea!!!";  
}

?>