<?php
function curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); // Memperbaiki penulisan
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Memperbaiki penulisan
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekweb/per2/1.php");
$data = json_decode($send, TRUE);

// Pastikan data tidak kosong
if(!empty($data)) {
    echo "<table border='1' cellspacing='0' cellpadding='10' style='width: 100%; border-collapse: collapse;'>";
    echo "<tr style='background-color: #00FFFF; color: white;'>
            <th>ID Wisata</th>
            <th>Kota</th>
            <th>Landmark</th>
            <th>Tarif</th>
          </tr>";

    foreach($data as $row) {
        // Menambahkan warna latar belakang bergantian untuk setiap baris
        echo "<tr style='background-color: #8A2BE2;'>";
        echo "<td>" . $row["id_wisata"] . "</td>";
        echo "<td>" . $row["kota"] . "</td>";
        echo "<td>" . $row["landmark"] . "</td>";
        echo "<td>" . $row["tarif"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Data tidak ditemukan.";
}
?>