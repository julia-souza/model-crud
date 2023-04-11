<?php

$host = "localhost"; // ou outro endereço IP
$port = "5432"; // a porta padrão do PostgreSQL é 5432
$dbname = ""; // nome do banco de dados
$user = "";   // nome do usuário do banco de dados
$password = ""; // senha de acesso ao banco de dados

$conn = pg_connect("host={$host} port={$port} dbname={$dbname} user={$user} password={$password}");

if (!$conn) {
  echo "Não foi possível conectar ao banco de dados.";
  exit;
}

?>


