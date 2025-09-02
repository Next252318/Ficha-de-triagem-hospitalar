<?php



$host = "localhost";
$user = "root";
$pass = ""; // não há senha 
$database = "triagem1";

$conn = new mysqli ($host, $user, $pass, $database);
if ($conn->connect_error){
    http_response_code(500);
    echo json_encode (["erro" => "falha na conexão"], JSON_UNESCAPED_UNICODE);
    exit();
};

