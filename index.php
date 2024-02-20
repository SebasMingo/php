<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form method="POST" action ="controllers.php" >
    <div class="row">
        <div class="col-12"><input class="form-control form-control-sm" type="text" name="nombre_apellido" placeholder="Nombre y apellido"></div>
</div>
<div class="row">
        <div class="col-12"><input class="form-control form-control-sm" type="date" name="fecha_nacimiento"></div>
</div>
        <div class="col-12"><input class="form-control form-control-sm" type="text" name="cedula" placeholder="Número de cédula"></div>
        <div class="col-12"><input class="form-control form-control-sm" type="text" name="telefono" placeholder="Numero de teléfono"></div>
        <div class="col-12"><input class="form-control form-control-sm" type="text" name="direccion" placeholder="Dirección y particular"></div>
        <div class="col-12"><button type="submit" class="btn btn-primary" class="form-control form-control-sm" >Guardar</button></div>
    </form>
</div>
</body>
</html>