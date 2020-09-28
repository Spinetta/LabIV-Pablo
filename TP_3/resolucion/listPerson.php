<!DOCTYPE html>
<html lang="en">

    <?php include_once("header.php") ?>

<body>

    <?php include_once("navbar.php") ?>

    <?php

        // Si viene del ejercicio 9, $people ya va a estar seteado y con la nueva persona agregada
        // Si viene del ejercicio 5-C) $people no estara seteada, por ende la asigna para que haya datos
        if(!isset($people)){
            $people = [ 
                ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
                ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
                ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
                ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
                ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
                ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
                ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
            ];
        }
        
    ?>

    <div class="container">
    <div class="card text-white bg-dark mb-3 mt-3 text-center">
            <div class="card-body">
            <h1>Lista de personas</h1>
            </div>
        </div>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                </tr>
            </thead>

            <tbody>

            <?php  foreach($people as $person){ ?>

                    <tr>
                        <td><?php echo $person['name'] ?></td>
                        <td><?php echo $person['age'] ?></td>
                        <td><?php echo $person['sex'] == 'm' ?  "Masculino" :  "Femenino" ?></td>
                    </tr>

            <?php  } ?>

            </tbody>
        </table>
    </div>

    <?php include_once("footer.php") ?>
    
</body>
</html>