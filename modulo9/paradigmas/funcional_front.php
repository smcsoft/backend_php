<?php include ('funcional_back.php'); ?>
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
            <?php $list = (isset($_GET['search'])) ? getList(($_GET['search'])) : getlist(); ?>
            <?php foreach ($list as $auto) : ?>
               <tr>
                    <td><?php echo $auto['marca']; ?></td>
                    <td><?php echo $auto['marca']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    
</body>
</html>