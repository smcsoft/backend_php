<?php

/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * ============================================================================
 *   ____                                      _                             
 *  / __ \                                    | |                            
 * | |  | |  _ __     ___   _ __    __ _    __| |   ___    _ __    ___   ___ 
 * | |  | | | '_ \   / _ \ | '__|  / _` |  / _` |  / _ \  | '__|  / _ \ / __|
 * | |__| | | |_) | |  __/ | |    | (_| | | (_| | | (_) | | |    |  __/ \__ \
 *  \____/  | .__/   \___| |_|     \__,_|  \__,_|  \___/  |_|     \___| |___/
 *          | |                                                              
 *          |_|                                                                                                                   
 * ============================================================================
 **/

//? -----------------------
//? OPERADORES LÓGICOS
//? -----------------------

//$a && $b 
//$a || $b

$var1 = 2;
$var2 = 3;
$var3 = 4;
$var4 = 2;

// AND
if ($var1 < $var2 AND $var3 > $var4) {
    echo "si ingresa al";
}

if ($var1 == $var2 && $var3 != $var4) {
    echo "si ingresa al a condicion";
}

// OR
if ($var1 == $var2 OR $var3 != $var4) {
    echo "si ingresa al a condicion";
}

if ($var1 == $var2 || $var3 != $var4) {
    echo "si ingresa al a condicion";
}
