<!DOCTYPE html>
<html lang="en">
<?php include_once("header.php") ?>
<body>

    <?php include_once("navbar.php") ?>


    <div class="container">

        <div class="card mb-3 mt-3 text-center">
            <div class="card-body">
            <h1>Trabajo Practico 3</h1>
            </div>
        </div>

    <!-- 1.	Partiendo de lo siguiente:
            $myNumber = 123; 
            $numberString = “123”;

                a.	¿Qué valor se espera si hacemos $myNumber + $numberString? 
                b.	¿Y si hacemos la operación inversa?
                c.	¿Y si hacemos $myNumber.$numberString? -->

        <?php 
            $miNumero = 123;
            $numeroEnString = "123";

            $suma = $miNumero + $numeroEnString;
            $resta = $miNumero - $numeroEnString;
            $numeroConcat = $miNumero.$numeroEnString;
        ?>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 1</h5>

                <p class="card-text"> A) <?php echo $suma ?> </p>
                <p class="card-text"> B) <?php echo $resta ?> </p>
                <p class="card-text"> C) <?php echo $numeroConcat ?> </p>

            </div>
        </div>
        
    <!-- 2.	Si cambiamos la condición del siguiente if por los valores en la lista, 
            ¿obtendremos siempre en pantalla un cartel que diga “Es correcto”? 
            Pruebe en una consola y responda:
            
            $if(condition){
                    echo “It´s right”; 
            }

            a.	1 == ”1”
            b.	1 === ”1”
            c.	! null 
            d.	! false 
            e.	“” 
            f.	“ “ 
            g.	“tested” 
            h.	1-1 -->

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 2</h5>

                <p class="card-text"> 
                    A) <?php if(1 == "1"){echo "It´s right";} ?> 
                </p>
                
                <p class="card-text"> 
                    B) <?php if(1 === "1"){echo "It´s right";} ?> 
                </p>

                <p class="card-text"> 
                    C) <?php if(!null){echo "It´s right";} ?> 
                </p>

                <p class="card-text"> 
                    D) <?php if(!false){echo "It´s right";} ?> 
                </p>

                <p class="card-text"> 
                    E) <?php if(""){echo "It´s right";} ?> 
                </p>

                <p class="card-text"> 
                    F) <?php if(" "){echo "It´s right";} ?> 
                </p>

                <p class="card-text"> 
                    G) <?php if("tested"){echo "It´s right";} ?> 
                </p>

                <p class="card-text"> 
                    H) <?php if(1-1){echo "It´s right";} ?> 
                </p>

            </div>
        </div>

    <!-- 3.	Cree dos funciones, una que permita multiplicar y otra que permita dividir. 
        Pruébelas en pantalla inventando valores. ¡No olvide evitar errores matemáticos! -->

        <?php 

            function multiply($a, $b)
            {
                return $a * $b;
            }

            function divide($a, $b)
            {
                return $a / $b;
            }
        ?>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 3</h5>

                <p class="card-text"> Multiplicacion -> 25 * 3 = <?php echo multiply(25, 3) ?> </p>
                <p class="card-text"> Division -> 25 / 3 =  <?php echo round(divide(25, 3), 2) ?> </p>
                <!-- round($numeroConDecimales, $cantidadDeDecimales) : funcion utilizada para acortar decimales -->
                <!-- mas info : https://www.php.net/manual/es/function.round.php -->

            </div>
        </div>

    <!-- 4.	¿Cuál es el largo del siguiente arreglo? ¿Y su contenido?

            $array = [  
                    1     => "first value",
                    "1"  => "second value",    
                    1.2  => "tirth value",    
                    true => "fourth value",    
                    1+0.2 => "fifth value",    
                    false !== null => "sixth value", 
            ]; -->

        <?php 

            $array = [  
                1     => "first value",
                "1"  => "second value",    
                1.2  => "tirth value",    
                true => "fourth value",    
                1+0.2 => "fifth value",    
                false !== null => "sixth value", 
            ];
        
        ?>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 4</h5>

                <?php foreach($array as $key =>$value){ ?>

                    <p class="card-text"> <?php echo "Key: " . $key . " | Value: " . $value ?> </p>
                    
                <?php } ?>
                
                <h6>Respuesta:</h6>
                <p class="card-text"> 
                    El array contiene 1 solo elemento, debido a que en la declaracion todos los indices
                    son = 1, o variantes, y por ende se superpone. El ultimo elemento superpuesto es '[ sixth value ]'.
                </p>

            </div>
        </div>

    <!-- 5.	Partiendo del siguiente arreglo de personas ‘people’:

        $people = [ 
                ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
                ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
                ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
                ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
                ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
                ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
                ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
        ]; -->

        <?php

        $people = [ 
            ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
            ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
            ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
            ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
            ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
            ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
            ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
        ];
        
        ?>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title mb-3"> Ejercicio 5</h5>

                <!-- a.	Imprima por pantalla el total de mayores de edad. -->

                <h6>A) Mayores de edad</h6>

                <div class="row row-cols-1 row-cols-md-5">

                  <?php foreach($people as $person){

                            if($person['age'] >= 18){ ?>

                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">

                             <?php 
                             foreach($person as $key => $value){
                                echo $key . ": " . $value . "<br>"; 
                             } 
                             ?>

                            </div>
                        </div>
                    </div>

                 <?php          
                            } // cierro el if
                        } // cierro el foreach
                 ?>
                    
                </div>

                <!-- b.	De mujeres menores de edad.  -->

                <h6>B) Mujeres menores de edad</h6>

                <div class="row row-cols-1 row-cols-md-5">

                  <?php foreach($people as $person){

                            if($person['age'] < 18 && $person['sex'] == 'f'){ ?>

                            <div class="col mb-4">
                                <div class="card">
                                    <div class="card-body">

                                    <?php 
                                    foreach($person as $key => $value){
                                        echo $key . ": " . $value . "<br>";
                                    } 
                                    ?>

                                    </div>
                                </div>
                            </div>

                 <?php          
                            } // cierro el if
                        } // cierro el foreach
                 ?>
                    
                </div>

                <!-- c.	Cree una web que muestre una tabla con esos datos.  -->

                <h6>C) <a href="listPerson.php"><button class="btn btn-primary">Lista de personas</button></a> </h6><br>

                <!-- d.	Redúzcalo hasta obtener un arreglo de edades únicamente. -->

                <h6>D) Arreglo reducido a edades:</h6>

                <?php 
                foreach($people as $person)
                    {
                        unset($person['name'], $person['sex']);
                        print_r($person);
                        echo "<br>";
                    }
                ?>

            </div>
        </div>

    <!-- 6.	Confeccione un documento php donde se procese e imprima por pantalla el día de la semana en la que se encuentra. 
            (Investigue function date() )
            Por ejemplo: “El día de la semana es : xxxxx ”

            a.	Una vez impreso el día, modificar para que al ser sábado o Domingo imprima “Es fin de semana.” -->
            
            <?php
                function isWeekend()
                {
                    if(date("w", time()) == 0 || date("w", time()) == 6)
                    {
                        echo " Es fin de semana<br>";
                    }else{
                        echo " No es fin de semana :(<br>";
                    }
                }
                // info date() -> https://www.php.net/manual/es/function.date.php
            ?>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 6</h5>
                
                <h6>Fecha: </h6>
                <p class="card-text"><?php echo date ( "l d/m/Y", time()) ?> </p>

                
                <h6>Respuesta:</h6>
                <p class="card-text"> <?php isWeekend(); ?> </p>

            </div>
        </div>

    <!-- 7.	Se necesita un nuevo tratamiento de la información que se nos envía por un formulario con los datos de la cesta de los clientes.

            a.	Si la compra del cliente es inferior a 200 pesos podrán requerir 2 cosas:
            i.	si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
            ii.	si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 80 pesos".

            b.	Si la compra tiene un importe entre 200 y 600 pesos se le indicará el mensaje: "Los gastos de envío son 80 pesos".

            c.	Si la compra supera los 600 pesos deberemos indicar un mensaje de que los portes de envío son gratis.

            d.	Si la compra supera los 2000 pesos deberemos mostrar un mensaje con un código de descuento: CODEDESC33.

            Para este problema disponemos de los siguientes datos:

                El importe total de la cesta de la compra viene en una variable $total_sale con un número decimal positivo. Ejemplo: $750.55.
                En la variable $type_sale nos viene un texto que puede ser 'mascotas' o 'ropa'. -->

        <?php
            $total_sale = rand(0, 25000) / 10;
            $type_sale = "pet";

            function purchaseFilter($amount, $type)
            {
                if($amount < 200)
                {
                    echo $type == "pet" ? "No se puede realizar el envio." : "Los gastos de envio son 80 pesos.";

                }else if ($amount <= 600)
                {
                    echo "Los gastos de envio son 80 pesos.";

                }else if ($amount <= 2000)
                {
                    echo "El envio es gratis.";

                }else{ echo "Codigo de descuento: CODEDESC33.";}
            }
        ?>
        
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 7</h5>
                
                <p class="card-text"> Total sale: <?php echo $total_sale ?> </p>

                
                <h6>Respuesta:</h6>
                <p class="card-text"> <?php purchaseFilter($total_sale, $type_sale) ?> </p>

            </div>
        </div>

    <!-- 8.	Se nos pide realizar un script que indique cual es el mayor de 4 números, es decir, 
            se definen cuatro números enteros y debemos mostrar un mensaje con el mayor de los cuatro. 
            Las variables con los cuatro números serán $a, $b, $c y $d.
                Dato: (valide el script intercambiando los valores de todas las variables). -->

        <?php 
            $a = rand(0,100);
            $b = rand(0,100);
            $c = rand(0,100);
            $d = rand(0,100);

            function getHigher($a, $b, $c, $d){
                $X = $a > $b ? $a : $b; // si $a es mayor a $b la seteo como primer mayor
                $Y = $c > $d ? $c : $d; // si $c es mayor a $d la seteo como segundo mayor
                return $X > $Y ? $X : $Y;   // retorno el mayor
            }
            
            /* Otra solucion ...
            
            function getHigher($A, $B, $C, $D)
            {
                $higher = $A;

                if($higher < $B)
                {
                    $higher = $B;

                }else if($higher < $C)
                {
                    $higher = $C;

                }else if($higher < $D)
                {
                    $higher = $D;
                }

                return $higher;
            } */
        ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 8</h5>
                
                <h6>Valores</h6>
                <p class="card-text"> A -> <?php echo $a ?> </p>
                <p class="card-text"> B -> <?php echo $b ?> </p>
                <p class="card-text"> C -> <?php echo $c ?> </p>
                <p class="card-text"> D -> <?php echo $d ?> </p>
                
                <h6>Respuesta:</h6>
                <p class="card-text"> <?php echo "El numero mayor es " . getHigher($a, $b, $c, $d) ?> </p>

            </div>
        </div>

    <!-- 9.	Cree una pequeña página web que contenga un formulario con tres input de texto para poder rellenar 
            la información de una nueva persona (como las del ejercicio 5). 
            Este formulario debe enviarse a otro script php, quien debe mostrar una tabla bien formada. -->

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"> Ejercicio 9</h5>
                
                <a href="newPerson.php"><button class="btn btn-primary">Nueva persona</button></a>

            </div>
        </div>
    
    </div>



    <?php include_once("footer.php") ?>
</body>
</html>