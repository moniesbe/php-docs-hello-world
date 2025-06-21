$host = getenv('DB_HOST');
$usuario = getenv('DB_USER');
$contrasena = getenv('DB_PASSWORD');
$basedatos = getenv('DB_NAME');

try {
    $conexion = new PDO("mysql:host=$host;dbname=$basedatos", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión correcta";
} catch (PDOException $e) {
    echo "Error al conectar con la base de datos: " . $e->getMessage();
}
