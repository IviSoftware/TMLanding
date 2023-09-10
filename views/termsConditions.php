<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Midas</title>
    <link rel="stylesheet" href="../assets/css/trainingMidasGlobalStyles.css?v6.0">
    <link rel="stylesheet" href="../assets/css/registerStyles.css?v3.0">
    <script src="https://kit.fontawesome.com/7663d03649.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

    <style>

        .alertConditions,
        .conditionsSee{
            background-color:#130D09;
            color:white; 
            margin:0 auto;
            margin-top:40px;
            padding:15px;
            width:90%;
            max-width:500px;
        }

        .conditionsSee{
            display:none;
        }

        .acceptBtn{
            all:unset;
            background:transparent;
            border-radius:25px;
            color:white;
            border:1px solid white;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:15px;
            width:160px;
            margin:0 auto;
            margin-top:30px;
        }

      @media screen and (min-width:1024px) {
        .alertConditions,
        .conditionsSee{
            padding-top:90px;
            padding-bottom:90px;
        }
      }  
    </style>
    <link rel="stylesheet" href="../assets/css/menuDesktopStyles.css?v1.0">
</head>
<body>
    <?php require '../layouts/navBar.php'  ?>
    <?php require '../layouts/menuMobile.php' ?>

    <header>
        <h1>ÚNETE A</h1>
        <img class="logoRegister" src="../assets/images/logo_academy_training.png" alt="logo academy training midas">
    </header>

    <section class="loginSection">
        <div class="alertConditions">
            <p>
                HE LEÍDO Y ESTOY DE ACUERDO CON LOS 
                <span style="color:#DABE6C;text-decoration:underline;" id="seeTerms">
                    <b>TÉRMINOS Y CONDICIONES</b>
                </span>
                DE TRAINING MIDAS.
            </p>
            <button class="acceptBtn">ACEPTAR</button>
        </div>
        <div class="conditionsSee">
            <h2>TÉRMINOS Y CONDICIONES</h2>
            <p class="termsText" style="color:#DABE6C">Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Explicabo dicta blanditiis corrupti, error velit, 
            illum sunt molestiae, voluptate facilis saepe adipisci doloribus aliquam 
            laborum neque animi hic dolores vero deleniti.</p>
            <button class="acceptBtn">ACEPTAR</button>
        </div> 
    </section>

    <script>
        const alertConditions = document.querySelector('.alertConditions');
        const conditionsSee = document.querySelector('.conditionsSee');
        const seeTerms = document.getElementById('seeTerms');

        seeTerms.addEventListener('click',()=>{
            alertConditions.style.display='none';
            conditionsSee.style.display='block';
        });


    </script>
</body>
</html>