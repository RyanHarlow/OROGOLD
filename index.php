<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="index.css">
    <title>OROGOLD</title>
</head>

<body>
    <nav id='main-nav'>
        <div id='nav-container'>
            <img id='nav-brand' src="./img/cropped-orogold-logo-dgold.png" alt="OROGOLD logo" />
            <div id='nav-right'>
                <a id='nav-email-link' href="mailto: orogoldspa@orogold.com">orogoldspa@orogold.com</a>
                <button id='nav-reserva-button'>Reserva ahora</button>
            </div>
        </div>
    </nav>

    <section id='main-hero'>
        <div id='hero-content-container'>
            <div id='hero-content'>
                <h1 id='hero-title'>OROGOLD</h1>
                <h3 id='hero-subtitle'>Cuando belleza y glamour van de la mano.</h3>
            </div>
            <div id="reserva-form-container">

                <form id='reserva-form' action="">
                    <h2 class='form-item form-title'>Reserva ahora tu cita</h2>
                    <input class='form-item form-input' placeholder="nombre" type="text">
                    <input class='form-item form-input' placeholder="email" type="text">
                    <input class='form-item form-input' placeholder="telephono" type="text">
                    <button class='form-item form-button'>Reserva ahora</button>
                </form>
            </div>
        </div>
    </section>
    <section id="tratamientos-section">
        <h2 id='tratamientos-title'>NUESTROS TRATAMIENTOS</h2>
        <div id='tratamientos-content-container'>
            <p id='tratamientos-content'>El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y pies utilizando acietes de masaje</p>
        </div>
        <div id='tratamientos-card-container'>
            <div class='tratamiento-card'>
                <div class='img-cropper'>
                    <img class='tratamiento-img-tall' src="./img/photo-1516238840914-94dfc0c873ae.jpg" alt="MASAGES CON ORO">
                </div>
                <h3 class='card-title'>MASAJES CON ORO</h3>
                <p class='card-content'><strong>SPA Orogold</strong> ofrece tratamientos especializados de la mano de nuestros profesionales expertos, con productos excepcionales de marcas galardonadas</p>
            </div>
            <div class='tratamiento-card'>
                <div class='img-cropper'>
                    <img class='tratamiento-img' src="./img/photo-1515377905703-c4788e51af15.jpg" alt="EXFOLIACIÓN CON PRODUCTOS NATURALES">
                </div>
                <h3 class='card-title'>EXFOLIACIÓN CON PRODUCTOS NATURALES</h3>
                <p class='card-content'>El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y pies</p>
            </div>
            <div class='tratamiento-card'>
                <div class='img-cropper'>
                    <img class='tratamiento-img' src="./img/photo-1552693673-1bf958298935.jpg" alt="RECONSTRUCCIÓN FACIAL">
                </div>
                <h3 class='card-title'>RECONSTRUCCIÓN FACIAL</h3>
                <p class='card-content'>El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y pies</p>
            </div>
        </div>
    </section>
    <section id='quienes-somos-section'>
        <div id='quienes-somos-content-container'>
            <div id='quienes-somos-background-overlay'>
                <div id='quienes-somos-text-container'>
                    <h2 id='quienes-somos-title'>QUIENES SOMOS</h2>
                    <p class='quienes-somos-text'>El lujoso spa en Orogold, en Mexico, ofrece un refugio sublime en pleno corazón de la ciudad.</p>
                    <p class='quienes-somos-text'>Los huéspedes pueden disfrutar de un gimnasio de última generación, una relajante sauna o duchas a chorro durante su escapada de 5 estrellas en nuestro hotel boutique en París. Por otra parte, nuestra nueva asociación con ZEAL COSMETICS asegura la disponibilidad de una gama de relajantes tratamientos faciales y corporales para mimarse y revitalizarse.</p>
                </div>
            </div>
        </div>
        <div class='image-carousel-container'>
            <div>
            <img class='carousel-img' src="./img/photo-1489659639091-8b687bc4386e.jpg" alt="">
</div>
            <div>
            <img class='carousel-img' src="./img/photo-1554057009-6798cb3d4a04.jpg" alt="">
            </div>
            <div>
            <img class='carousel-img' src="./img/photo-1531853121101-cb94c8ed218d.jpg" alt="">
            </div>
            <div>
            <img class='carousel-img' src="./img/photo-1560944527-a4a429848866.jpg" alt="">
            </div>
            <div>
            <img class='carousel-img' src="./img/photo-1553540751-988bd7918c7e.jpg" alt="">
            </div>
            <div>
            <img class='carousel-img' src="./img/photo-1555820585-c5ae44394b79.jpg" alt="">
            </div>
            <div>
            <img class='carousel-img' src="./img/photo-1559058922-5d29e1f00075.jpg" alt="">
            </div>
            <div>
            <img class='carousel-img' src="./img/photo-1513104806186-1b00f3e7a65e.jpg" alt="">
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src='index.js'></script>
</body>

</html>