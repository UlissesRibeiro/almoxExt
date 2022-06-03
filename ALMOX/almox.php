<?php

/***CONEXÃO COM O BD ***/
//Constantes para armazenamento das variáveis de conexão.
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'almox');
define('USER', 'root');
define('PASSWORD', 'ragnarok0');

try {
    $conn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
    //echo "Connected successfully";
    }
    catch (PDOException $e) {
        //echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' . $e->getMessage();
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Almox</title>
</head>
<body>
    <?php
    $instrucaoSQL ="SELECT * From equip_almox"; /* where nome_usuario='$nome'";*/
    
    $resultSet = $conn->query($instrucaoSQL);

    //echo "lolo";
    ?>

<?php
    while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)):
        
           
?>

<?php echo "<img src='img/pc-tower.png' width='40x'> Desktop"." " . $row['desktop']."<br>"; ?>
<?php echo "<img src='img/estab.png' width='35px'> Estabilizador"." " . $row['estabilizador']."<br>"; ?>
<?php echo "<img src='img/supply.png' width='30px'> Fonte"." " . $row['fonte']."<br>"; ?>
<?php echo "<img src='img/monitor.png' width='35px'>  Monitor"." " . $row['monitor']."<br>"; ?>
<?php echo "<img src='img/mouse.png' width='30px'> Mouse"." " . $row['mouse']."<br>"; ?>
<?php echo "<img src='img/laptop.png' width='30px'>  Notebook"." " . $row['notebook']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Desk DDR3 4GB"." " . $row['ram_desk_ddr3_4gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Desk DDR3 8GB"." " . $row['ram_desk_ddr3_8gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Desk DDR4 4GB"." " . $row['ram_desk_ddr4_4gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Desk DDR4 8GB"." " . $row['ram_desk_ddr4_8gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Note DDR3 4GB"." " . $row['ram_note_ddr3_4gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Note DDR3 8GB"." " . $row['ram_note_ddr3_8gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Note DDR4 4GB"." " . $row['ram_note_ddr4_4gb']."<br>"; ?>
<?php echo "<img src='img/ram.png' width='35px'> RAM Note DDR4 8GB"." " . $row['ram_note_ddr4_8gb']."<br>"; ?>
<?php echo "<img src='img/ssd-disk.png' width='30px'> SSD"." " . $row['ssd']."<br>"; ?>
<?php echo "<img src='img/keyboard.png' width='40px'> Teclado"." " . $row['teclado']."<br>"; ?>

<?php
endwhile;
?>
</body>
</html>