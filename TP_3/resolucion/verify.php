<?php
    $param = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $param = $_POST;
    }
    else
    {
        $param = $_GET;
    }

    // Arreglo de personas al que se agregara la nueva persona para luego ser mostrado
    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];
    
    if(!empty($param['name']) && !empty($param['age']) && isset($param['sex']) && is_numeric($param['age']))
    {
        // si los parametros son validos agrego al arrego
        array_push($people, $param);    // $param tiene el mismo formato que los elementos de $people, por ende se puede pasar directamente
        
        /* Otra manera...

        array_push($people, ['name' => $param['name'], 'age' => $param['age'], 'sex' => $param['sex']]);
        
        */

        include("listPerson.php");
        
    }else{
        $msg_error = "Complete los campos correctamente !";
        include("newPerson.php");
    }
?>