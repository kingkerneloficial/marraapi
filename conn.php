<?php
$config = (object) parse_ini_file('.env');
try {
    // Caminho para o arquivo SQLite
    $databasePath = "$config->DB_NAME"; // Altere o caminho conforme necessário

    // Criar uma nova conexão PDO
    $pdo = new PDO("$config->DB_DRIVE:$databasePath");

    // Definir o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Tratar erro de conexão
    echo "Erro na conexão: " . $e->getMessage();
}
