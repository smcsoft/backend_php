<?php

/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * ========================================
 *    _____   _          _               
 *  / ____| (_)        | |              
 * | |       _    ___  | |   ___    ___ 
 * | |      | |  / __| | |  / _ \  / __|
 * | |____  | | | (__  | | | (_) | \__ \
 *  \_____| |_|  \___| |_|  \___/  |___/
 * ========================================
 */


//? -----------------------
//? WHILE
//? -----------------------

$contador = 10;
/*
while ($contador <= 6) {
  echo $contador . "\n";
  $contador += 1;
}
*/
//? -----------------------
//? DO WHILE
//? -----------------------
/*
  do {
    echo $contador."\n";
    $contador += 1;
  } while ($contador < 6);
*/

//? -----------------------
//? FOR
//? -----------------------
/*
for($i = 0; $i <= 6; $i++) {
  $var = $contador * $i;
  echo $var. "\n";
}
*/

$cervezas = ['rubia', 'mestiza', 'morena'];
$limite = count($cervezas); // 3
/*
for($i = 0; $i < $limite; $i++) {
    echo  $cervezas[$i]."\n";
}
*/
//? -----------------------
//? FOREACH
//? -----------------------

$cervezas = ['rubia', 'mestiza', 'morena', 'morena11'];

foreach($cervezas as $birra) {
  if ($birra == "morena" || $birra == "mestiza") {
    echo $birra."\n";
  }
}

// foreach($cervezas as $clave => $valor) {
//   echo $clave . ' ' . $valor."\n";
// }