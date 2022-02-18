<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de prestamos</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
</head>
<body>
    <h1>Calculadora de tabla de amortización</h1>
    <form action="./prestamo.php" method='post'>
        <label>Sistema de amortización</label>
        <select name="sistema" id="">
            <option value="simple">Sistema simple: Cuota, amortización e interes fijo</option>
            <option value="compuesto">Sistema Compuesto: Interes y cuotas variables</option>
        </select>
        <br>
        <label>Fecha del desembolso (d/m/a):</label>
        <input type="date" name="fecha_prestamo" id="">
        <br>
        <label>Importe del prestamo:</label>
        <input type="number" name="monto">
        <br>
        <label>Periodo</label>
        <select name="periodo" id="">
            <option value="diario">diario</option>
            <option value="semanal">semanal</option>
            <option value="quincenal">quincenal</option>
            <option value="mensual">Mensual</option>
            <option value="anual">Anual</option>
        </select>
        <br>
        <label>Interes:</label>
        <input type="number" name="interes" id="">
        <br>
        <label>Plazo:</label>
        <input type="number" name="plazo" id="">
        <br>
        <button type="submit">Enviar</button>
    </form>
    

</body>
</html>