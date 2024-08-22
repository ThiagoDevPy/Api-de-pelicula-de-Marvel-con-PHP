<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$response = curl_exec($ch);

$data = json_decode($response, true);
curl_close($ch);

?>
<head>
    <meta  charset="UTF-8" />
    <title>The Next Movie for Marvel</title>
    <!-- Centered viewport -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>
 <header>
    <h1 >Proxima pelicula de Marvel</h1>
 </header>
<main>
    
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="poster <?= $data["title"];  ?>" style="border-radius: 16px" />
    </section>
    <hgroup>
        <h2><?= $data["title"]; ?> se estrena en <?= $data["days_until"];  ?> días. </h2>
        <p>Fecha de estreno: <?= $data["release_date"]; ?> </p>
        <p>El siguiente estreno es: <?= $data["following_production"]["title"] ?> </p>
    </hgroup>
    
</main>

<footer>
    <p>© 2024 Proxima pelicula de Marvel from ThiagoDev</p>
</footer>
<style>
    :root {
        color-scheme: light dark;
        font-size: 15px;
        font-family: 'Poppins'; 
    }
    body {
        display: grid;
        place-content: center;
    }
    section {
        display: flex; 
        justify-content: center;
        text-align: center;
    }
    img {
        text-align: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
     footer{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
     }
     
     h1{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
     
   
</style>
