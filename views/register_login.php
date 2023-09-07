<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Midas</title>
    <link rel="stylesheet" href="../assets/css/trainingMidasGlobalStyles.css?v6.0">
    <link rel="stylesheet" href="../assets/css/registerStyles.css?v4.0">
    <script src="https://kit.fontawesome.com/7663d03649.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
  
    <?php require '../layouts/menuMobile.php' ?>


    <header>
        <h1>ÚNETE A</h1>
        <img class="logoRegister" src="../assets/images/logo_academy_training.png" alt="logo academy training midas">
    </header>

    <section class="loginSection">
        <h2>INICIAR SESIÓN</h2>

        <form action="#" id="formLogin">
            <input class="inputForm" type="email" placeholder="Dirección de correo electrónico" />
            <input class="inputForm" type="password" placeholder="Contraseña" />
        </form>

        <div class="containerLoginSocialNetworks">
            <div class="containerNetwork">
                <img src="../assets/images/icons/facebook_icon.svg" alt="logo de facebook">
                <p>Iniciar sesión con Facebook</p>
            </div>

            <div class="containerNetwork">
                <img src="../assets/images/icons/google_icon.svg" alt="logo de google">
                <p>Ingresar con Google</p>
            </div>

            <div class="containerNetwork">
                <img src="../assets/images/icons/apple_icon.svg" alt="logo de apple">
                <p>Iniciar sesión con Apple</p>
            </div>
        </div>
    </section>

    <div class="borderDesktop"></div>
</body>
</html>