<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fecha_prestamo = $_POST['fecha_prestamo'];
        $monto = $_POST['monto'];
        $periodo = $_POST['periodo'];
        $interes = $_POST['interes'];
        $plazo = $_POST['plazo'];
        $sistema = $_POST['sistema'];
    ?>
    <h1>Calculador de prestamos</h1>
    <header>
        <p>
            Fecha del prestamo <?php echo $fecha_prestamo;?>
        </p>
        <p>
            Monto <?php echo $monto; ?>
        </p>
        <p>
            Periodo: <?php echo $periodo;?>
        </p>
        <p>
            Impuesto <?php echo $sistema;?>
        </p>
        <p>
            Interes: <?php echo $interes;?>
        </p>
        <p>
            Plazo: <?php echo $plazo;?>
        </p>
    </header>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cuota</th>
                <th>Capital</th>
                <th>Interés</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($sistema=='simple'){
                    $fecha_prestamo++;
                    $capital = $monto / $plazo;
                    $interes_aplicado = $monto * $interes/100;
                    $saldo = $monto - $capital; 
                    for ($i=0; $i < $plazo; $i++) { 
                        echo "<tr>";
                            echo "<td>";
                                echo $fecha_prestamo++;
                            echo "</td>";
                            echo "<td>";
                                echo number_format($capital + $interes_aplicado,2);
                            echo "</td>";
                            echo "<td>";
                                echo number_format($capital,2);
                            echo "</td>";
                            echo "<td>";
                                echo number_format($interes_aplicado,2);
                            echo "</td>";
                            echo "<td>";
                                echo number_format($saldo,2);
                                $saldo = $saldo - $capital;
                            echo "</td>";
                        echo "</tr>";
                    }
                }else{
                    $fecha_prestamo++;
                    $capital = $monto / $plazo;
                    $interes_aplicado = $monto * $interes/100;
                    $saldo = $monto - $capital; 
                    for ($i=0; $i < $plazo; $i++) { 
                        echo "<tr>";
                            echo "<td>";
                                echo $fecha_prestamo++;
                            echo "</td>";
                            echo "<td>";
                                echo number_format($capital + $interes_aplicado,2);
                            echo "</td>";
                            echo "<td>";
                                echo number_format($capital,2);
                            echo "</td>";
                            echo "<td>";
                                $interes_aplicado=$monto;
                                echo number_format($interes_aplicado,2);
                            echo "</td>";
                            echo "<td>";
                                echo number_format($saldo,2);
                                $saldo = $saldo - $capital;
                            echo "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>