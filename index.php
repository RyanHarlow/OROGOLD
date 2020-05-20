<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>OROGOLD</title>
</head>
<body>
    <nav id='main-nav'>
    <div id='nav-container'>
        <img id='nav-brand' src="./img/cropped-orogold-logo-dgold.png" alt="OROGOLD logo" />
        <div id='nav-right'>
        <a id='nav-email-link' href = "mailto: orogoldspa@orogold.com">orogoldspa@orogold.com</a>
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
                <button class='form-item form-button' >Reserva ahora</button>
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
    

    <script src='index.js'></script>
</body>
</html>