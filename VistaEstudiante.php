<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Mascotas</title>
</head>
<body>
    <p>
        <h2>INGRESO DE MASCOTAS</h2>
    </p>
    <form action="EstudianteController.php" method="post">

        <p>
            <label for="idMscota">Id Mascota</label>
        <input type="text" name="nombre">
        </p>

        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro" name="btnGuardar">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE MASCOTAS</h3>
    <hr>
    <table border="1">
        <th>ID MACOTA</th>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">Acciones</th>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['idMscota'] ?> </td>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                <td><a href="VistaEditarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>"><img src="publicalo.png">Editar</a></td>
                <td><img src="borrar.png">Eliminar</td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>