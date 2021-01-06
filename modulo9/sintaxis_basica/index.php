<?php
/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * ===============================================================================================
 *    _____   _           _                    _           ____                  _                
 *   / ____| (_)         | |                  (_)         |  _ \                (_)               
 *  | (___    _   _ __   | |_    __ _  __  __  _   ___    | |_) |   __ _   ___   _    ___    __ _ 
 *   \___ \  | | | '_ \  | __|  / _` | \ \/ / | | / __|   |  _ <   / _` | / __| | |  / __|  / _` |
 *   ____) | | | | | | | | |_  | (_| |  >  <  | | \__ \   | |_) | | (_| | \__ \ | | | (__  | (_| |
 *  |_____/  |_| |_| |_|  \__|  \__,_| /_/\_\ |_| |___/   |____/   \__,_| |___/ |_|  \___|  \__,_|
 *                                                                                                
 * ===============================================================================================
 **/


//? -----------------------
//? ETIQUETAS
//? -----------------------

//? -----------------------
//? COMENTARIOS
//? -----------------------
    # comentario simple
    // Comentario de una linea
    /*
        comentario multi linea
    */

//? -----------------------
//? SENTENCIAS Y BLOQUES
//? -----------------------

    echo "texto";

    $varible = "test";

    if ("logica de comparacion") {
           // procesamiento de la logica indicada
    };
    class LaClase {
        // Cuerpo del bloque
    }
    
//? -----------------------
//? TIPOS DE DATO
//? -----------------------

// ESCALARES
    // bool (true o false || 1 o 0)
    // int (números enteros)
    // float (números de punto flotante)
    // string (cadenas de texto)
    // null (valores «nulos»)

// COMPUESTOS
    // array (arreglos)
    // object (objeto)
    // resource

//? -----------------------
//?  VARIABLES
//? -----------------------

    $variable = "212222";
    $tipo_variable = gettype($variable);
    echo $tipo_variable. "<br>";
    settype($variable, 'integer');

    echo gettype($variable);
    //echo $tipo_variable;

    // VARIABLES COMPUESTAS
    $array1 = array("v1", "v2", "v3", "v4");
    $array2 = ["v1","v2", "v3", "v4"];
    $array3 = [
        "v1" => ['v1.1','v1.2','v1.3'],
        "v2" => ['v2.1','v2.2','v2.3'],
        "v3" => ['v3.1','v3.2','v3.3']
    ];
    //var_dump($array1);
    //var_dump($array3['v2'][1]);