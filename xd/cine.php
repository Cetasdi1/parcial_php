<?php
$nom = $_POST['nom'];
$apel = $_POST['apel'];
$direc = $_POST['direc'];
$num = $_POST['num'];
$docu = $_POST['id'];
$dinero = $_POST['din'];
$edad = $_POST['Edad'];
$iva1 = 0.16;

if($_REQUEST['pelicula'] == "r"){
    $entrada = 5000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 14){
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "cumple con los requisitos para ver la pelicula"."<br>";
            echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
            echo "precio por entrada: $total"."<br>";
            echo "le sobran $sobra";
        }
        else{
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "No cuenta con la edad suficiente para ver la película Rambo";
        }
    } 
    else{
        echo "La persona $nom $apel identificado con el numero $docu"."<br>";
        echo "residente de $direc, numero telefonico $num"."<br>";
        echo "No cuenta con el dinero suficiente para ver la película Rambo";
    }
}
elseif($_REQUEST['pelicula'] == "d"){
    $entrada = 7000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 14){
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "cumple con los requisitos para ver la pelicula"."<br>";
            echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
            echo "precio por entrada: $total"."<br>";
            echo "le sobran $sobra";
        }
        else{
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "No cuenta con la edad suficiente para ver la película Depredador";
        }
    } 
    else{
        echo "La persona $nom $apel identificado con el numero $docu"."<br>";
        echo "residente de $direc, numero telefonico $num"."<br>";
        echo "No cuenta con el dinero suficiente para ver la película Depredador";
    }  
}
elseif($_REQUEST['pelicula'] == "c"){
    $entrada = 9000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 18){
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "cumple con los requisitos para ver la pelicula"."<br>";
            echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
            echo "precio por entrada: $total"."<br>";
            echo "le sobran $sobra";
        }
        else{
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "No cuenta con la edad suficiente para ver la película El cazador de brujas";
        }
    } 
    else{
        echo "La persona $nom $apel identificado con el numero $docu"."<br>";
        echo "residente de $direc, numero telefonico $num"."<br>";
        echo "No cuenta con el dinero suficiente para ver la película El cazador de brujas";
    }
}
elseif($_REQUEST['pelicula'] == "l"){
    $entrada = 12000;
    $iva = $entrada * $iva1;
    $total =$entrada + $iva;
    if($dinero >= $total){
        if($edad >= 20){
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "cumple con los requisitos para ver la pelicula La Red"."<br>";
            echo "Edad: $edad, total efectivo: $dinero"."<br>";
            $sobra = $dinero - $total;
            echo "precio por entrada: $total"."<br>";
            echo "le sobran $sobra";
        }
        else{
            echo "La persona $nom $apel identificado con el numero $docu"."<br>";
            echo "residente de $direc, numero telefonico $num"."<br>";
            echo "No cuenta con la edad suficiente para ver la película La Red";
        }
    } 
    else{
        echo "La persona $nom $apel identificado con el numero $docu"."<br>";
        echo "residente de $direc, numero telefonico $num"."<br>";
        echo "No cuenta con el dinero suficiente para ver la película La Red";
    }    
}
?>