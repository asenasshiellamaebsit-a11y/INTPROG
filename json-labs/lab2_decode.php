<?php
$jsonData = '{"name":"Maria","age":21,"email":"maria@example.com"}';
$userObject = json_decode($jsonData);
$userArray = json_decode($jsonData, true);
echo "Object: " . $userObject->name . "\n";
echo "Array: " . $userArray['email'] . "\n";
?>
