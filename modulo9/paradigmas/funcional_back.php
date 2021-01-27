<?php 

function getAutos()
{
    return [
        [
            "marca" => "Audi",
            "modelo" => "A5",
            "slug" => "audi"
        ],
    
        [
            "marca" => "Audi",
            "modelo" => "A3",
            "slug" => "audi"
        ],
        [
            "marca" => "Audi",
            "modelo" => "A4",
            "slug" => "audi"
        ]
    
    ];
}

function getList($search = "")
{
    $autos = getAutos();
    if(!isset($search) || !empty($search) || $search != "") {
        foreach($autos as $key => $auto) {
            $pos = strpos($auto['slug'], $search);
            if ($pos === false) {
                unset($autos["$key"]);
            }
        }
    }

    return $autos;
}   

?>