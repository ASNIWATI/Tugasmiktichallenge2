<?php
// Data Uji
$data = array(
    array("Mark" => array("mass" => 78, "height" => 1.69), "John" => array("mass" => 92, "height" => 1.95)),
    array("Mark" => array("mass" => 95, "height" => 1.88), "John" => array("mass" => 85, "height" => 1.76))
);

// Fungsi untuk menghitung BMI
function calculateBMI($mass, $height) {
    return $mass / ($height * $height);
}

// Fungsi untuk membandingkan BMI Mark dan John
function compareBMI($markData, $johnData) {
    $markBMI = calculateBMI($markData["mass"], $markData["height"]);
    $johnBMI = calculateBMI($johnData["mass"], $johnData["height"]);
    return $markBMI > $johnBMI;
}

echo "<h2>Data Mark dan John serta Perbandingan BMI:</h2>";

// Menampilkan data dan perbandingan BMI
foreach ($data as $index => $item) {
    $markData = $item["Mark"];
    $johnData = $item["John"];
    $markHigherBMI = compareBMI($markData, $johnData);
    
    echo "<h3>Data " . ($index + 1) . ":</h3>";
    echo "<p>Berat Mark: " . $markData["mass"] . " kg, tinggi: " . $markData["height"] . " m</p>";
    echo "<p>Berat John: " . $johnData["mass"] . " kg, tinggi: " . $johnData["height"] . " m</p>";
    if ($markHigherBMI) {
        echo "<p>Mark memiliki BMI lebih tinggi dari John</p>";
    } else {
        echo "<p>Mark tidak memiliki BMI lebih tinggi dari John</p>";
    }
    echo "<hr>";
}
?>
