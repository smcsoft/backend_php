<?php

/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * ============================================================================
 *  ______                          _                              
 * |  ____|                        (_)                             
 * | |__     _   _   _ __     ___   _    ___    _ __     ___   ___ 
 * |  __|   | | | | | '_ \   / __| | |  / _ \  | '_ \   / _ \ / __|
 * | |      | |_| | | | | | | (__  | | | (_) | | | | | |  __/ \__ \
 * |_|       \__,_| |_| |_|  \___| |_|  \___/  |_| |_|  \___| |___/
 *                                                                 
 * ============================================================================
 */

// ===========================
// funciones anonimas
// ===========================
(function ($param){ echo "$param";})('hola');


// ===========================
// funciones asignadas a variables
// ===========================
$funtion = function($param){
    echo "$param";
};

$funtion('test');

// ===========================
// funciones como parametros
// ===========================

function f2($function, $parameter)
{
    $function($parameter);
}

$f1 = function($param){
    echo "$param";
};

f2($f1,'beto');

// ===========================
// funciones que retornan funciones
// ===========================

function f()
{
    return function($param){ echo "$param";};
};

$a = f();
$a('beto');