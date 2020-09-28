<?php
include('header.php');

use config\autoload as Autoload;
use models\Task as Task;
use repositories\taskRepository as TaskRepository;

$repos = new taskRepository();
$arrayTask= $repos->getAll();

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Tareas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Titulo</th>
                         <th>Fecha</th>
                         <th>Descripcion</th>
                         <th>Recordatorio</th>
                    </thead>

                    <tbody>
                         <form action="process/removetask.php" method="post">
                         <?php
                              if(isset($arrayTask)){
                                   foreach($arrayTask as $task){
                                   
                                        ?>
                                             <tr>
                                                  <td><?php echo $task->getTitle(); ?></td>
                                                  <td><?php echo $task->getDate(); ?></td>
                                                  <td><?php echo $task->getDescription(); ?></td>
                                                  <td><?php echo $task->getReminder(); ?></td>
                                                  <td> 
                                                       <button type="submit" name="botonRemove" class="btn btn-danger" value="<?php echo $task->getTitle(); ?>"> Eliminar </button>
                                                  </td>
                                             </tr>
                                        <?php
                                   }
                              }
                         ?>
                         </form>
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php')?>
