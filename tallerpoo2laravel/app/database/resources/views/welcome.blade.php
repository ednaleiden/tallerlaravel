<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>
    <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="imagenes/png" href="https://assets.stickpng.com/images/580b57fcd9996e24bc43c516.png" />
    </head>
    <body class="antialiased">
          <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="http://pngimg.com/uploads/apple_logo/apple_logo_PNG19675.png" alt="" width="40" height="32" class="d-inline-block align-text-top">
      Inicio
    </a>
  </div>
  

</nav>
<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('https://s1.eestatic.com/2021/03/26/omicrono/568954698_176556691_1706x960.jpg');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">Inicio</h1>
        <p uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;">Pagina de inicio</p>
    </div>
</div>
<div  class= "container mt-5">
    <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Principal</h3>
                <p>Pagna principal</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Principal</h3>
                <p>Pagna principal</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Principal</h3>
                <p>Pagna principal</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Principal</h3>
                <p>Pagna principal</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Principal</h3>
                <p>Pagna principal</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Principal</h3>
                <p>Pagna principal</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Selecione el Boton</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Ruta de contacto</p>
            </div>
            <div>
                <p>Gracias</p>
            </div>
            <div>
                <button type="button" class="btn btn-primary"><a href="http://127.0.0.1:8000/contacto" style="color:#FFFFFF">Ruta de contacto</a></button>
            </div>
        </div>

    </div>
</div>
</div>

    </body>
</html>
