<?php

$host = "localhost"; // ou outro endereço IP
$port = "5432"; // a porta padrão do PostgreSQL é 5432
$dbname = "dadoscnpq";
$user = "postgres";
$password = "brasil";

$conn = pg_connect("host={$host} port={$port} dbname={$dbname} user={$user} password={$password}");

if (!$conn) {
  echo "Não foi possível conectar ao banco de dados.";
  exit;
}
else{
  echo("Coneectou piranhaaa");
}

?>


