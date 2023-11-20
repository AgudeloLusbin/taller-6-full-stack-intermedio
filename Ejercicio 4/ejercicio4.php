<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="ejercicio4.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="edad">Fecha de nacimiento</label>
        <input type="date" name="date" class="form-control" id="date" required>
        </div>
    </div>
    <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
    </form>

    <?php

        if(isset($_POST['calcular'])){
            $date_n = $_POST['date'];
            $date = new DateTime( $_POST['date']);
            $fecha_actual_n = date('Y-m-d');
            $fecha_actual = new DateTime(date('Y-m-d'));
            $diff = $date->diff($fecha_actual);
            $anio = $diff->y;
            $mes = $diff->m;
            $dia = $diff->d;

            echo '<h1>Fecha de nacimiento = '.$date_n.'<br>'.
            'Fecha actual = '.$fecha_actual_n.'<br>'.
            'Edad = '.$anio.' año(s) '.$mes.' mes(es) y '.$dia.' día(s)</h1>';
        }

    ?>
</body>
</html>