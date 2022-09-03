<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
        th,
        td{
            text-align:center;
        }
    </style>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
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
            <input type="submit" value="Guardar Registro">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>
    <table border="1">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
<!-- *************************************************** -->
          <tr>
                <td>Carlos</td>
                <td>Hernandez</td>
                <td>Zona 1</td>
                <td>84565678</td>
                <td><a href="editar.php"><img src="usuario.png" alt="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.png" alt="Eliminar"></a></td>
          </tr>

          <tr>
                <td>Santiago</td>
                <td>Herrera</td>
                <td>Zona 9</td>
                <td>53234543</td>
                <td><a href="editar.php"><img src="usuario.png" alt="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.png" alt="Eliminar"></a></td>
          </tr>
          <tr>
                <td>Victor</td>
                <td>Gomez</td>
                <td>Zona 3</td>
                <td>54565456</td>
                <td><a href="editar.php"><img src="usuario.png" alt="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.png" alt="Eliminar"></a></td>
          </tr>

          <tr>
                <td>Emanuel</td>
                <td>Villatoro</td>
                <td>Zona 4</td>
                <td>23123234</td>
                <td><a href="editar.php"><img src="usuario.png" alt="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.png" alt="Eliminar"></a></td>
          </tr>
          
          <tr>
                <td>Jose</td>
                <td>Ramirez</td>
                <td>Zona 6</td>
                <td>75343456</td>
                <td><a href="editar.php"><img src="usuario.png" alt="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.png" alt="Eliminar"></a></td>
          </tr>
          
          <tr>
                <td>Alejandro</td>
                <td>Lopez</td>
                <td>Zona 1</td>
                <td>09392934</td>
                <td><a href="editar.php"><img src="usuario.png" alt="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.png" alt="Eliminar"></a></td>
          </tr>
          
    
    </table>
</body>
</html>