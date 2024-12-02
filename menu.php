<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a6ded029d7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>KasiaBurger</title>
</head>
<body>
<header>
        <i class="fa-solid fa-bars burger-icon"></i>
        <a href="./index.html" class="logo"><i class="fa-solid fa-burger" id="burgerIcon"></i></a>
        <!-- <i class="fa-solid fa-xmark"></i> -->
        <div class="header-right">
            <section class="socials">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </section>
            <div class="delivery-bgc">
                <a href="#" class="delivery">DOSTAWA ONLINE <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        </header>
        <div class="burger-menu">

        </div>

        <main>
            <section class="menu">
                <h2 class="section-header">Menu</h2>
                <div class="header-underline"></div>
                <div class="menu-flex">

                <?php
                $conn = mysqli_connect("localhost", "root", "", "burgerownia");

                $q = "SELECT nazwa, cena, zdjecie FROM menu";
                $result = mysqli_query($conn, $q);

                if (mysqli_num_rows($result) > 0) {
                
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                        echo '<div class="card">';
                        echo '<img src="./img/' . $row['zdjecie'] . '" alt="' . $row['nazwa'] . '">';
                        echo '<p class="text">' . $row['nazwa'] . '</p>';
                        echo '<p class="price">' . $row['cena'] . 'zł</p>';
                        echo '</div>';
                    }
                } else {
                    echo "Brak produktów w menu.";
                }
                mysqli_close($conn);
                ?>
            </section>
        </main>
</body>
</html>