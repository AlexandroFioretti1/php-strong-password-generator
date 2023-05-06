<?php


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
        <div class="container d-flex align-items-center justify-content-center">
            <span class="p-3">Lunghezza Password:</span>
            <input type="text" name="text" id="text" placeholder="Scegli numero di caratteri">
        </div>
        <!-- ./ length password -->

        <!-- info set password -->
        <div class="container d-flex justify-content-center p-2 ">
            <span>Consenti ripetizioni di uno o più caratteri?</span>
            <div class="d-flex">
                <div>
                    <form class="px-2">
                        <input type="radio" id="html" name="fav_language" value="HTML">
                        <label for="Si">Si</label>
                        <input type="radio" id="css" name="fav_language" value="CSS">
                        <label for="No">No</label>
                    </form>
                </div>
            </div>
        </div>
        <div class="container text-center ">
            <h6 class="pt-2">Come deve essere composta la tua password?</h6>
            <form class="pt-2">
                <input type="checkbox" id="Letters" name="Letters" value="Bike">
                <label for="Letters"> Lettere</label>
                <input type="checkbox" id="Numbers" name="Numbers" value="Car">
                <label for="Numbers"> Numeri</label>
                <input type="checkbox" id="Symbols" name="Symbols" value="Car">
                <label for="Symbols"> Simboli</label>
            </form>
        </div>
        <!-- ./ info set password -->

        <!-- btn for send  -->
        <div class="text-center pt-5">
            <button type="button" class="btn btn-primary">Invia</button>
            <button type="button" class="btn btn-secondary">Annulla</button>
        </div>
        <!-- btn for send  -->
    </main>

    <footer id="app_footer">

    </footer>

</body>

</html>