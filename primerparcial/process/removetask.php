<?php 
namespace process;

require_once("../config/autoload.php");

use config\autoload as Autoload;
use repositories\taskRepository as TaskRepository;
use models\Task as Task;

if($_POST)
{
	$taskTitle = $_POST["botonRemove"];
	
	$repo = new taskRepository();
    $repo->delete($taskTitle);
	echo "Se elimino la tarea!!!";  
}
?>