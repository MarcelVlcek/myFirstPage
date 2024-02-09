<?php include 'shared/header.php'; ?>  


<section class=adults>
    <h1>Hámornícky polmaratón</h1>
    <div class="result-adult">
        <?php
        require "shared/database.php";

        // Vykonanie dotazu na ziskanie nazvov sutazi
        $sql = "SELECT id, competetion_name FROM vysledky_dospeli order by id desc";
        $result = $conn->query($sql);

        // Kontrola, ci dotaz prebehol spravne
        if (!$result) {
            die("Dotaz zlyhal: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            // Vypis nazvov sutazi a odkazu pre stazeni
            while ($row = $result->fetch_assoc()) {
                echo '<p><i class="fa-solid fa-arrow-right"></i><a href="download.php?id=' . $row['id'] . '">' . $row['competetion_name'] . '</a></p>';
            }
        } else {
            echo "Ziadne nazvy sutazi k dispozicii.";
        }

        // Uzavretie pripojenia
        $conn->close();
        ?>
    </div>

</section>





<sectionc class="kids">
<h1>Hámorníček</h1>
<div class="result-kids">
        <?php
        require "shared/database.php";

        // Vykonanie dotazu na ziskanie nazvov sutazi
        $sql = "SELECT id, competetion_name FROM vysledky_deti order by id desc";
        $result = $conn->query($sql);

        // Kontrola, ci dotaz prebehol spravne
        if (!$result) {
            die("Dotaz zlyhal: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            // Vypis nazvov sutazi a odkazu pre stazeni
            while ($row = $result->fetch_assoc()) {
                echo '<p><i class="fa-solid fa-arrow-right"></i><a href="download-kids.php?id=' . $row['id'] . '">' . $row['competetion_name'] . '</a></p>';
            }
        } else {
            echo "Ziadne nazvy sutazi k dispozicii.";
        }

        // Uzavretie pripojenia
        $conn->close();
        ?>
    </div>
</sectionc>




<?php include 'shared/footer.php'; ?> 
