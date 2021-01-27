<?php 
$titulo = "Paradigma Imperativa (Espagueti)";
$autos = [
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

    if(isset($_REQUEST['search']) || !empty($_REQUEST['search'])) {
        $search = $_REQUEST['search'];
        foreach($autos as $key => $auto) {
            $pos = strpos($auto['slug'], $search);
            if ($pos === false) {
                unset($autos[$key]);
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $titulo; ?></title>
</head>
<body>
    <h1><?php $titulo; ?></h1>
    <form method="GET">
        <input type="search" name="search">
        <input type="submit" value="buscar">
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($autos as $au) {
                    echo "<tr>";
                    echo "<td>".$au['marca']."</td>";
                    echo "<td>".$au['modelo']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>