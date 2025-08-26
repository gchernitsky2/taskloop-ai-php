<?php
/*
 * TaskLoop AI - Versión PHP en un solo archivo
 * Sistema SaaS de automatización con IA
 */

// ========================== CONFIGURACIÓN ==========================
define('DB_HOST', 'localhost');
define('DB_NAME', 'taskloop');
define('DB_USER', 'root');
define('DB_PASS', '');
define('OPENAI_API_KEY', 'TU_CLAVE_OPENAI');

// Conexión a la base de datos
try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// ========================== HTML INICIO ==========================
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>TaskLoop AI</title></head><body>";
echo "<h1>Bienvenido a TaskLoop AI</h1>";
echo "<p>Automatiza tus tareas con inteligencia artificial</p>";

// ========================== MENÚ ==========================
echo "<h3>Menú:</h3><ul>
        <li><a href='?view=usuario'>Vista de Usuario</a></li>
        <li><a href='?view=admin'>Panel de Administración</a></li>
        <li><a href='?view=sql'>Mostrar SQL</a></li>
      </ul>";

// ========================== VISTAS ==========================
$view = isset($_GET['view']) ? $_GET['view'] : '';

if ($view == 'usuario') {
    echo "<h2>Panel de Usuario</h2>";
    echo "<p>Próximamente podrás crear flujos de automatización aquí.</p>";

} elseif ($view == 'admin') {
    echo "<h2>Panel de Administración</h2>";
    echo "<p>Acceso a usuarios, automatizaciones y configuración del sistema.</p>";

} elseif ($view == 'sql') {
    echo "<h2>taskloop.sql</h2>";
    echo "<pre>
CREATE TABLE usuarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255),
  rol ENUM('admin', 'usuario') DEFAULT 'usuario'
);

CREATE TABLE automatizaciones (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT,
  nombre VARCHAR(100),
  flujo TEXT,
  creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);</pre>";
}

// ========================== FOOTER ==========================
echo "<hr><footer><small>TaskLoop AI © 2025</small></footer>";
echo "</body></html>";
?>
