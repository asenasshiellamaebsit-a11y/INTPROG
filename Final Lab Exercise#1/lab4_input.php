<?php
$jsonString = '{"username":"admin","password":"1234"}';
$data = json_decode($jsonString, true);

echo "Username: " . $data['username'] . "\n";
echo "Password: " . $data['password'] . "\n";
?>
