<?php
header('Content-Type: application/json');
$input = file_get_contents('php://stdin');
$data = json_decode($input, true);
$name = $data['name'] ?? 'Guest';

$response = [
    "status" => "success",
    "message" => "Welcome, $name!"
];

echo json_encode($response);
?>
