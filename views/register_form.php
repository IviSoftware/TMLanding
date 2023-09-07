<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Midas</title>
    <link rel="stylesheet" href="../assets/css/trainingMidasGlobalStyles.css?v5.0">
    <link rel="stylesheet" href="../assets/css/registerStyles.css?v3.0">
    <script src="https://kit.fontawesome.com/7663d03649.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <style>
        .inputForm{
            border:0;
            border-bottom:1px solid white;
        }

        .inputForm::placeholder{
            color:white;
        }

        .inputForm:focus{
            outline:none;   
        }
    
    </style>
</head>
<body>

    <?php require '../layouts/menuMobile.php' ?>

    <header>
        <h1>ÚNETE A</h1>
        <img class="logoRegister" src="../assets/images/logo_academy_training.png" alt="logo academy training midas">
    </header>

    <section class="loginSection">

        <form action="#" id="formRegister">
            <input class="inputForm" type="text" name="firstName" id="firstName" placeholder="NOMBRE">
            <input class="inputForm" type="email" placeholder="EMAIL" />
            <input class="inputForm" type="password" placeholder="CONTRASEÑA" />
            <input class="inputForm" type="password" placeholder="CONFIRMAR CONTRASEÑA" />
            <input class="inputForm" type="date" name="birthday" id="birthday" placeholder="FECHA DE CUMPLEAÑOS">

            <input type="submit" class="btnRegister" value="REGISTRARTE">
        </form>

        
    </section>
</body>
</html>