<?php
      require "shared/database.php";


// Získanie názvu a obsahu PDF z databázy
$id = 1; 

$sql = "SELECT pdf_name, pdf_content FROM propozicie WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Nastavenie hlavičiek pre stiahnutie PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline'); 
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    // Vypíšte obsah PDF
    echo $row['pdf_content'];
} else {
    echo "Dokument nebol nájdený";
}

// Uzavretie pripojenia
$conn->close();
?>