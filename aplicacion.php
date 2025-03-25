<?php 


const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
/* curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json'
]); */
// Desactivar verificación SSL (No recomendado en producción)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


$resultado = curl_exec($ch);

$data = json_decode($resultado, true);

curl_close($ch);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/picocss.min.css">
</head>
<body>


<header>

        <div class="top">
                <div>
                    <h1>Proximo estreno de Marvel</h1>
                    <small>Datos obtenidos desde: <?= API_URL;?></small>
                </div>
                <div>
                    <img src="/images/php.png" alt=""  width="100"/>
                </div>
        </div>

</header>

    <main>
        <section>
        <p>Título: <?= $data['title']; ?></p>
        <p>Fecha estreno: <?= $data['release_date']; ?></p>
        <p>Dias faltantes para el estreno: <?= $data['days_until']; ?>  días.</p>
        <p>Tipo: <?= $data['type']; ?> </p>
        <img src="<?= $data['poster_url']; ?>" alt="" width="250" style="border-radius:16px;">
        <p>Resumen:</p>    
        <div class="resumen">            
            <p> <?= $data['overview']?></p>
        </div>

        </section>
    </main>
    
    <main>
        <section>
        <p>Título: <?= $data['following_production']['title']; ?></p>
        <p>Fecha de estreno: <?= $data['following_production']['days_until'];?> días.</p>
        <p>Dias faltantes: <?= $data['following_production']['days_until']?></p>
        <p>Tipo: <?= $data['following_production']['type']; ?> </p>
        <img src="<?= $data['following_production']['poster_url']; ?>" alt="" width="250" style="border-radius:16px;">
        <p>Resumen:</p>    
        <div class="resumen">            
            <p> <?= $data['following_production']['overview']?></p>
        </div>

        </section>
    </main>


    
    
</body>
</html>