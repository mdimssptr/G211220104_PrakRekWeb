<?php    
$array = [  
    "nama" => "Jesse Pinkman",  
    "umur" => 24,  
    "pekerjaan" => "Network Enginer"  
];  

$json = json_encode($array);  

echo "JSON: " . $json . "\n";  
?>