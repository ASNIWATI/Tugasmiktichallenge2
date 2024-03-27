<?php
// Data
$data = array(
    array("Lumba-lumba" => array(96, 108, 89), "Koala" => array(88, 91, 110)),
    array("Lumba-lumba" => array(97, 112, 101), "Koala" => array(109, 95, 123)),
    array("Lumba-lumba" => array(97, 112, 101), "Koala" => array(109, 95, 106))
);

// Fungsi untuk menghitung skor rata-rata
function averageScore($teamScores) {
    $total = array_sum($teamScores);
    $count = count($teamScores);
    return $total / $count;
}

// Fungsi untuk menentukan pemenang
function determineWinner($data) {
    $results = array();
    foreach ($data as $item) {
        $avgLumba = averageScore($item["Lumba-lumba"]);
        $avgKoala = averageScore($item["Koala"]);

        // Memeriksa jika skor rata-rata kedua tim lebih dari atau sama dengan 100
        $minScore = 100;
        if ($avgLumba >= $minScore && $avgKoala >= $minScore) {
            if ($avgLumba > $avgKoala) {
                $results[] = "Tim Lumba-lumba menang";
            } elseif ($avgLumba < $avgKoala) {
                $results[] = "Tim Koala menang";
            } else {
                $results[] = "Seri";
            }
        } else {
            $results[] = "Tidak ada tim yang memenangkan trofi";
        }
    }
    return $results;
}

// Menampilkan hasil
$results = determineWinner($data);
foreach ($results as $index => $result) {
    echo "Data " . ($index + 1) . ": " . $result . "<br>";
}
?>
