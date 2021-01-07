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
//? OPERADORES DE COMPARACIÓN
//? -----------------------

//  $n == $m Compara si el valor de $n es igual al de $m.
//  $n != $m Compara si el valor de $n es diferente de $m.
//  $n > $m Compara si el valor de $n es mayor que el $m.
//  $n >= $m Compara si el valor de $n es mayor o igual que el $m.
//  $n < $m Compara si el valor de $n es menor que el $m.
//  $n <= $m Compara si el valor de $n es menor o igual que el $m.

$n = 6;
$m = '6';

//echo $n + $m;
// Comparación de igualdad
//echo $n == $m; // true
 
// Cambiar el valor y comparar de nuevo
$m = 9;
//echo $n == $m; //  false
//var_dump($n == $m);

$m = '6';
//echo $n != $m; // $r = false
//echo $n !== $m; // $r = true
 
// Asignar el resultado de una comparación e imprimirlo
$m = 9;
$r = ($n < $m);// $r = false;
//echo $r;

var_dump($r); 
die(); // punto de interrucion