<?php

require "shared/database.php";

// Ziskanie ID z URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

//  ziskanie nazvu sutaze a suboru
$sql = "SELECT competetion_name, competetion_file FROM vysledky_deti WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($competetionName, $competetionFile);

if ($stmt->fetch()) {
    $stmt->close();

    // Nastavenie hlaviciek
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . basename($competetionName) . '.xlsx"');
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

    // Vystup obsahu suboru
    echo $competetionFile;

    // Uzavretie pripojenia
    $conn->close();
    exit;
} else {
    // Subor neexistuje v databaze
    $conn->close();
    echo 'Subor neexistuje v databaze.';
}
?>






