<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>


    <div class="container-md">
        <?php

        $projeAdi = $_GET["ad"];
        $projeTip = $_GET["tip"];
        switch ($projeTip) {
            case "Ürün Geliştirme":
                $projeTip = "Ürün Geliştirme";
                break;
            case "Yenileme":
                $projeTip = "Yenileme";
                break;
            case "Teknoloji Transferi":
                $projeTip = "Teknoloji Transferi";
                break;
            default:
                echo "Proje Tipi Seçilmedi!";
                break;
        }

        $projeozet = $_GET["ozet"];

        echo "<h1>$projeAdi</h1>";
        echo "<p>$projeTip projesi</p> <br> <br>";

        if ($_GET["mat"] == "on") {
            $metin = "Matematik ile ilgilidir. ";
        }

        else if ($_GET["sanat"] == "on") {
            $metin = "sanat ile ilgilidir. ";
        }

        else if ($_GET["tarih"] == "on") {
            $metin = "tarih ile ilgilidir. ";
        }
        
        else if ($_GET["ai"] == "on") {
            $metin = "ai ile ilgilidir. ";
        }

        else if ($_GET["saglik"] == "on") {
            $metin = "saglik ile ilgilidir. ";
        }

        else if ($_GET["Tek"] == "on") 
        {
            $metin = "Tek ile ilgilidir. ";
        }
        

        echo "<p>$metin</p>";
        ?>
    </div>

</body>

</html>