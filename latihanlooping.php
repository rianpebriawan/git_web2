<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 
            dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini

        // Looping Pertama (Ascending)
        echo "LOOPING PERTAMA<br>";
        for ($i = 2; $i <= 20; $i += 2) {
            echo "$i - I Love PHP<br>";
        }

        // Looping Kedua (Descending)
        echo "LOOPING KEDUA<br>";
        for ($i = 20; $i >= 2; $i -= 2) {
            echo "$i - I Love PHP<br>";
        }
        
        echo "<h3>soal no 2 asterix </h3>";
        /*
        soal no 2
        asterix 5x5
        tampilkan dengan loping dan echo agar
        output:
        *
        **
        *
        **
        ***
        */
        echo "<br>";
        echo "asterix:<br >";

        for($i = 1; $i <= 5; $i++){
            for ($j = 1; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";
        }
    ?>

</body>
</html>