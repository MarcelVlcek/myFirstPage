<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKSM</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="/css/aktuality.css">
    <link rel="stylesheet" href="./css/members.css">
    <link rel="stylesheet" href="/css/hpm.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/results.css">
    
    <link rel="icon" href="data:;base64,iVBORwOKGO=" />
    <!--scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.7.0.js"></script>
    
    <?php
    require "shared/database.php";

    
    $sql = "SELECT odkaz FROM registracia WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $odkaz = $row['odkaz'];
    } else {
        $odkaz = "#"; 
    }

    
    $conn->close();

    
    $currentDate = date('Y-m-d');
    $startDate = '2024-05-01';
    $endDate = '2024-07-10';
    ?>


</head>
<body class="home">
    <header class="center-content" id="home">
        <div class="main-nav container">
            <div class="nav-left">
                <div class="toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <a href="index.php" >
                    <img src="images/logo.png" alt="logo klubu" class="logo-home" >
                </a>

                <nav class="top-nav">
                    <ul  id="myTopnav">
                        <li ><a class="nav-link" href="/index.php">DOMOV</a></li>
                        <li><a class="nav-link" href="/aktuality.php">AKTUALITY</a></li>
                        <li><a class="nav-link" href="#">HÁMORNÍCKY POLMARATÓN <i class="fa-solid fa-caret-down"></i></a>
                            <ul class="sub-navigation">
                                <li><a href="/hpm.php" class="">O POLMARATÓNE&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-person-running"></i></a></li>
                                <li>
                                <?php
                                // Odkaz na registraciu
                                if ($currentDate >= $startDate && $currentDate <= $endDate) {
                                    echo '<a href="' . htmlspecialchars($odkaz, ENT_QUOTES) . '" target="_blank">REGISTRÁCIA &nbsp;&nbsp;&nbsp;<i class="fa-regular fa-address-card"></i></a>';
                                } else {
                                    // Registracia uzatvorena
                                    echo '<a href="/registration-closed.php">REGISTRÁCIA </a>';
                                }
                                ?>
                                </li>
                                <li><a href="download_pdf.php?id=' . $id . '" target="_blank" download>PROPOZÍCIE&nbsp;&nbsp;&nbsp;<i class="fa-regular fa-file"></i></a></li>
                                <li><a href="/results.php" class="">VÝSLEDKY-ARCHÍV &nbsp;&nbsp;&nbsp;<i class="fa-regular fa-folder"></i></a></li>
                                
                            </ul>
                        </li>
                        <li><a class="nav-link" href="/members.php">ČLENOVIA KLUBU</a></li>
                        <li><a class="nav-link" href="/contact.php">KONTAKT</a></li>
                    </ul>
                </nav>

                <nav class="dropdown-menu ">
                        <li ><a class="nav-link" href="/index.php">DOMOV</a></li>
                        <li><a class="nav-link" href="/aktuality.php">AKTUALITY</a></li>
                        <li><a class="nav-link" href="#">HÁMORNÍCKY POLMARATÓN</a>
                        <ul class="sub-navigation ">
                                <li><a href="/hpm.php" class="">O POLMARATÓNE</a></li>
                                
                                <li><?php
                                // Odkaz na registraciu
                                if ($currentDate >= $startDate && $currentDate <= $endDate) {
                                    echo '<a href="' . htmlspecialchars($odkaz, ENT_QUOTES) . '" target="_blank">REGISTRÁCIA &nbsp;&nbsp;&nbsp;<i class="fa-regular fa-address-card"></i></a>';
                                } else {
                                    // Registracia uzatvorena
                                    echo '<a href="/registration-closed.php">REGISTRÁCIA </a>';
                                }
                                ?></li>
                                
                                <li><a href="download_pdf.php?id=' . $id . '" target="_blank" download>PROPOZÍCIE</a></li>
                                
                                <li><a href="/results.php" class="">VÝSLEDKY-ARCHÍV </a></li>
                               
                                
                            </ul>
                        </li>
                        <li><a class="nav-link" href="/members.php">ČLENOVIA KLUBU</a></li>
                        <li><a class="nav-link" href="/contact.php">KONTAKT</a></li>
                </nav>   
            </div>   

            <div class="social">    
                <a href="https://www.facebook.com/people/Be%C5%BEeck%C3%BD-klub-Spartak-Medzev/100057216499381/" target="_blank"> <i class="fa-brands fa-facebook-f" style="color: rgba(0,119,182,1);"></i></a>
                <a href="https://instagram.com/bk_spartak_medzev?igshid=ZWQyN2ExYTkwZQ== " target="_blank"> <img src="/images/instagram.png" alt="instagram" class="instagram-icon" width="30px "height="30px"></a>
            </div>
        </div>   

       
    </header>  