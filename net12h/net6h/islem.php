<?php
include("cods/head.php");
?>


<body>
    <div class="container-md">
        <h1>PHP'de Koşul ve Döngüler</h1>
        <?php

        $sayi1 = $_GET["sayi1"];
        $sayi2 = $_GET["sayi2"];

        /* echo "sayi1 = $sayi1 , sayi2= $sayi2";
        echo "<hr>";

        if ($sayi1 % 2 == 0)
            echo "sayi1 bir çift sayıdır";
        else
            echo "sayi1 bir tek sayıdır.";
        echo "<hr>";

        $vize = $sayi1;
        $final = $sayi2;

        if (($vize >= 0 && $vize <= 100) && ($final >= 0 && $final <= 100)) {
            $ort = $vize * 0.4 + $final * 0.6;
            echo "notlar doğru aralıktatır ";
            echo "<br>";

            if ($final < 50)
                $Not = "FF";
            elseif ($ort < 45)
                $Not = "FF";
            elseif ($ort < 50)
                $Not = "DD";
            elseif ($ort < 55)
                $Not = "DC";
            elseif ($ort < 65)
                $Not = "CC";
            elseif ($ort < 72)
                $Not = "CB";
            elseif ($ort < 80)
                $Not = "BB";
            elseif ($ort < 90)
                $Not = "BA";
            elseif ($ort < 95)
                $Not = "AB";
            else
                $Not = "AA";

            echo "Vize Notunuz<b> $vize</b>, Final Notunu<b> $final</b> ise; Ortalamanız:<b> $ort</b>'dır . \n<br> 
            Bu durumda not karşılığı:<b> $Not</b> olarak tanımlanacaktır.";
        } else {
            echo "notlar yanlış aralıktadır. ";
        }
        echo "<hr>";
        echo "<h2>switch Örneği</h2 >";

        $hane = strlen($sayi1);

        // print ($hane);
        
        switch ($hane) {
            case 0:
                print (" $sayi1 sayısı  sıfır haneli dir. Yani yok");
                break;
            case 1:
                print (" $sayi1  sayısı 0-9 arasındadır. ");
                break;
            case 2:
                print (" $sayi1  sayısı 10-99 arasındadır. ");
                break;
            case 3:
                print (" $sayi1 sayısı  100-999 arasındadır. ");
                break;
            default:
                print (" $sayi1 sayısı  tanımlanmamış aralıktadır. ");
                break;
        }
*/
      /*  echo "<hr>";
        echo " <h2>Döngüler</h2>";

        for ($i = 0; $i <= $sayi1; $i++) {
            echo "$i <br>";
        }
        echo " <h3>iç içe Döngüler</h3>";

        for ($i = 1; $i <= $sayi1; $i++) { {
                for ($t = 1; $t <= $i; $t++)
                    echo "$t ";
                echo "<br>";
            }
        }

        echo "<hr>";
        $f = 1;

        $i = 1;

        while ($i <= $sayi1) {

            $f *= $i;
            $i++;
        }

        echo "$sayi1!=$f";
        echo "<hr>";*/
/*
        $dizi = array("bir", "iki", "uc", "dort");
        foreach ($dizi as $deger) {
            echo "$deger <br>";
        }

        echo "<hr>";
*/
        echo "<h2>Ön tanımlı fonksiyonlar.</h2>";

        $fx = array(
            "print",
            "echo",
            "array",
            "include",
            "rand",
            "sqrt",
            "abs",
            "ceil",
            "floor",
            "isset",
            "empty",
            "define",
            "die",
            "range"
            ,"shuffle"
            ,"array_slice"
        );
        foreach ($fx as $deger) {
            echo "$deger <br>";
        }
       // echo pow(9, 2);

        ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>