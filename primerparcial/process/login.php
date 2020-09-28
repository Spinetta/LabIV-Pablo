<?php 
    namespace process;
    require_once "../models/User.php";

    use models\User as User;

    $users = array();

    $user1 = new User('Diego Armando Maradona', 'd10s@arg.com', 'nosemancha');
    $users[] = $user1;

    $user2 = new User('Oscar Ruggeri', 'cabezon@arg.com', 'rompetibia');
    $users[] = $user2;

    $user3 = new User('Ariel Ortega', 'burrito@arg.com', 'vandersar');
    $users[] = $user3;

    $loggedUser = NULL;

    if($_POST)
    {
        foreach ($users as $key => $value) 
        {
            if($_POST['user'] == $value->getUser())
            {
                if($_POST['pass'] == $value->getPass())
                {
                    $loggedUser = $value;
                }
            }
        }
    }

    header("location:../dashboard.php");
    
    else
    {
        echo "Informacion Incorrecta";
    }

    
    
    

	

 ?>