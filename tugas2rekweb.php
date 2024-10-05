<?php  
  
$jsonString = '{"nama":"Jesse Pinkman","umur":24,"pekerjaan":"Network Enginer"}';  
  
$object = json_decode($jsonString);  

$arrayFromJson = json_decode($jsonString, true);  
  
echo "Akses dari Object: \n";  
echo "Nama: " . $object->nama . "\n";  
echo "Umur: " . $object->umur . "\n";  
echo "Pekerjaan: " . $object->pekerjaan . "\n";  
  
echo "Akses dari Array: \n";  
echo "Nama: " . $arrayFromJson['nama'] . "\n";  
echo "Umur: " . $arrayFromJson['umur'] . "\n";  
echo "Pekerjaan: " . $arrayFromJson['pekerjaan'] . "\n";  
?>
