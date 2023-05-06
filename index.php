<?php

function generaPsw()
{

    $password = "";


    $lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z',];

    $lettereUpperCase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'Z',];

    $numeri = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0',];

    $simboli = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ';', ':', '\'', '\"', '<', '>', ',', '.', '/', '?'];

    for ($i = 0; $i < $_GET["lunghezzaPsw"]; $i++) {
        $numero = rand(0, 3);
        if ($numero === 0) {
            $arrayScelto = $lettere;
        } elseif ($numero === 1) {
            $arrayScelto = $lettereUpperCase;
        } elseif ($numero === 2) {
            $arrayScelto = $numeri;
        } else {
            $arrayScelto = $simboli;
        }
        $password = $password . $arrayScelto[array_rand($arrayScelto)];
    }
    return $password;
}
$password = generaPsw();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Generate Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- title and subtitle -->
    <header id="app_header">
        <div class="container text-center pt-5">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>
    </header>
    <!-- ./ title and subtitle -->

    <!-- length password -->
    <main id="app_main">
        <form action="index.php" method="get">
            <div class="container d-flex align-items-center justify-content-center">
                <span class="p-3">Lunghezza Password:</span>
                <input type="text" name="lunghezzaPsw" id="text" placeholder="Scegli numero di caratteri">
            </div>
            <!-- ./ length password -->

            <!-- info set password -->
            <div class="container d-flex justify-content-center p-2 ">
                <span>Consenti ripetizioni di uno o più caratteri?</span>
                <div class="d-flex">
                    <div>
                        <input type="radio" id="" name="" value="">
                        <label for="Si">Si</label>
                        <input type="radio" id="" name="" value="">
                        <label for="No">No</label>
                    </div>
                </div>
            </div>
            <div class="container text-center ">
                <h6 class="pt-2">Come deve essere composta la tua password?</h6>
                <input type="checkbox" id="lettere" name="lettere" value="">
                <label for="lettere"> Lettere</label>
                <input type="checkbox" id="numeri" name="numeri" value="">
                <label for="numeri"> Numeri</label>
                <input type="checkbox" id="simboli" name="simboli" value="">
                <label for="simboli"> Simboli</label>
            </div>
            <!-- ./ info set password -->

            <!-- btn for send  -->
            <div class="text-center pt-5">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="submit" class="btn btn-secondary">Annulla</button>
            </div>
            <!-- btn for send  -->
        </form>
    </main>


    <footer id="app_footer">
        <div class="container text-center w-50 ">
            <div class="card bg-light">
                <h4>la tua password è : <?php echo $password ?> </h4>
            </div>
        </div>

    </footer>

</body>

</html>