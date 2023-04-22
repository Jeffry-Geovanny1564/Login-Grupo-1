
<?php

include ("conexion.php");
if (!$conn) {
    die('Error al conectarse a la base de datos: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Aquí irá el código para procesar el formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

if (empty($email) ||empty($password)) {
    $_SESSION['error'] = 'Por favor, completa todos los campos del formulario.';
    
    exit;
}

$resultado = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email' and password = '$password'");

// Contar el número de filas
$num_filas = mysqli_num_rows($resultado);

mysqli_close($conn);

if ($num_filas == 1) {

  header("Location: http://localhost/MiWeb/Pagina/index.php");

  exit;
} else {

  echo '<script>alert("El usuario no esta ingresado correctamente");</script>';  
  header("Location: http://localhost/MiWeb/index.html");
 exit;
}  
}

?>