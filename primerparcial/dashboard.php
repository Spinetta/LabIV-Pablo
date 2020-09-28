<?php
include_once '../config/constants.php';
include_once '../config/autoload.php';
?>

<?php include('header.php')?>

<div class="dashboard uk-flex"> 

    <div class="box">

        <h2>Agregar Tarea</h2>

        <form action="<?php echo ROOT_CLIENT ?>/process/addtasks.php" method="POST">
            <div class="uk-margin">
                <label for="user">Título</label>
                <input type="text" name="title" class="uk-input"/>
            </div>

            <div class="uk-margin">
                <label for="">Fecha</label>
                <input type="date" name="date" class="uk-input"/>
            </div>

            <div class="uk-margin">
                <label for="">Descripción</label>
                <textarea name="description" class="uk-textarea"></textarea>
            </div>

            <div class="uk-margin">
                <label for="">Recordatorio</label>
                <select class="uk-select" name="reminder">
                    <option>5 min</option>
                    <option>10 min</option>
                    <option>30 min</option>
                    <option>1 hora</option>
                    <option>1 día</option>
                </select>
            </div>

            <button type="submit" class="uk-button uk-button-primary">Enviar</button>
        </form>
    </div>

    <div class="box uk-width-1-1">

        <h2 style="color:white">Tareas</h2>

        <div class="tasks uk-flex uk-flex-wrap">
        
             <?php include('./listTask.php');?>
                                    
        </div>

    </div>
    
</div>

<?php include('footer.php') ?>