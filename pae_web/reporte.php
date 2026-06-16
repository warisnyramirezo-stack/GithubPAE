<?php
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM estudiantes");
?>

<!DOCTYPE html>
<html>
<head>
<title>Reporte PAE</title>
<style>
body {
font-family: Arial;
background: #f2f2f2;
text-align: center;
}

table {
margin: auto;
border-collapse: collapse;
width: 70%;
background: white;
}

th, td {
padding: 10px;
border: 1px solid #ccc;
}

th {
background: #4facfe;
color: white;
}

h2 {
margin-top: 20px;
}

a {
display: inline-block;
margin-top: 20px;
}
</style>
</head>
<body>

<h2>Reporte de Estudiantes PAE</h2>

<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
<td><?php echo $fila['id_documento']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['apellido']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Volver</a>

</body>
</html>