<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Midas</title> 
    <link rel="stylesheet" href="../assets/css/trainingMidasGlobalStyles.css?v2">
    <link rel="stylesheet" href="../assets/css/home.css?v6.0">
    <link rel="stylesheet" href="../assets/css/menuDesktopStyles.css?v1.0">
    <script src="https://kit.fontawesome.com/7663d03649.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>

    <?php require '../layouts/navBar.php'  ?>
  
    <?php require '../layouts/menuMobile.php' ?>


    <header>
        <h1>DESCUBRE TU CAMINO AL CONOCIMIENTO</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Mollitia sint iusto commodi dignissimos officiis culpa, dolor 
            doloribus itaque expedita laboriosam quam beatae voluptatem veritatis 
            adipisci. Eveniet reiciendis sit dolorum illo!
        </p>

        <a href="#" >
            <div class="ourCoursesBtn">¡EXPLORA NUESTROS CURSOS Y COMIENZA TU VIAJE DE APRENDIZAJE HOY MISMO!</div>
        </a>
    </header>

    <div class="contentSection">
        <div class="headerSection">
            <h2>BUSCAR CURSOS</h2>
            <div class="searchBarContainer desktopSearchBar">
                <i class="fa-solid fa-magnifying-glass" style="color: #FFF;" id="searchBarIcon"></i>
                <input type="text" class="searchBar">
            </div>
        </div>

        <section class="featuredCourses">
            <div class="headerSection">
                <h3 class="titleSection">CURSOS DESTACADOS</h3>
                <a href="#" class="seeMoreCoursesBtn">Ver más</a>
            </div>
            <div class="cardsContent">
            <?php for($i = 1;$i <= 3;$i++): ?>
                <div class="card" id="tecCard-<?= $i ?>">
                    <img class="courseImg" src="../assets/images/sampleVideoCourse.png" alt="imagen del curso">
                    <h3>NOMBRE DEL CURSO Tec</h3>
                    <p class="descriptionCard"><b>Breve Descripción.</b> Lorem,ipsum dolor sit amet consectetur adipisicing elit. 
                    Provident, delectus labore sapiente vero fugiat enim officia itaque aspernatur praesentium
                    qui veritatis odio, exercitationem consequuntur ex quo tempora iste. Inventore, laborum?
                    </p>
                    <div class="iconsCardFooter">  
                            <a href="#">
                                <img src="../assets/images/icons/notification_icon.png" alt="icono de suscribirse">
                                <span><b>SUSCRIBIRSE</b></span>
                            </a>
                            <a href="#">
                                <img src="../assets/images/icons/eye_icon.png" alt="icono de ver detalles">
                                <span><b>VER DETALLES</b></span>
                            </a>
                    </div>
                </div>
            <?php endfor; ?>
            </div>
        </section>

        <section class="categories">
            <h3>CATEGORIAS</h3>
            <div class="cardsContent">
                <div class="cardCategory">
                    <div class="textCard">
                      <h4>NEGOCIOS</h4>
                    </div>
                </div>
                <div class="cardCategory">
                    <div class="textCard">
                      <h4>TECNOLOGÍA</h4>
                    </div>
                </div>
                <div class="cardCategory">
                    <div class="textCard">
                      <h4>ARTES</h4>
                    </div>
                </div>
                <div class="cardCategory">
                    <div class="textCard">
                      <h4>CIENCIA</h4>
                    </div>
                </div>
            </div>
        </section>



        <section class="testimony">
            <h4>TESTIMONIOS</h4>
            <div class="footerTestimony">
              <h5>ALEJANDRA</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Consequatur ab saepe esse temporibus laudantium expedita corrupti
                soluta mollitia officia. Qui sunt minima odit nemo vel quam quasi
                fuga tempora voluptatum.
              </p>
            </div>
        </section>

        <section class="teachers">
            <div class="cardTeacher">
              <img src="../assets/images/instructores/maria.png" alt="Foto de instructor">
              <h4>MARÍA TRÁPAGA</h4>
              <div class="footerCardTeacher">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Earum adipisci doloribus optio ad quasi dicta aliquid ipsam eos?
                Est, porro velit magnam blanditiis perspiciatis possimus voluptatibus veniam animi doloribus rerum.
              </div>
            </div>
            <div class="cardTeacher">
              <img src="../assets/images/instructores/karina.png" alt="Foto de instructor">
              <h4>KARINA TRÁPAGA</h4>
              <div class="footerCardTeacher">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Earum adipisci doloribus optio ad quasi dicta aliquid ipsam eos?
                Est, porro velit magnam blanditiis perspiciatis possimus voluptatibus veniam animi doloribus rerum.
              </div>
            </div>
            <div class="cardTeacher">
              <img src="../assets/images/instructores/bernardo.png" alt="Foto de instructor">
              <h4>BERNARDO PÉREZ</h4>
              <div class="footerCardTeacher">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Earum adipisci doloribus optio ad quasi dicta aliquid ipsam eos?
                Est, porro velit magnam blanditiis perspiciatis possimus voluptatibus veniam animi doloribus rerum.
              </div>
            </div>
            <div class="cardTeacher">
              <img src="../assets/images/instructores/lorena.png" alt="Foto de instructor">
              <h4>LORENA CAMARGO</h4>
              <div class="footerCardTeacher">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Earum adipisci doloribus optio ad quasi dicta aliquid ipsam eos?
                Est, porro velit magnam blanditiis perspiciatis possimus voluptatibus veniam animi doloribus rerum.
              </div>
            </div>
        </section>

    </div>
</body>
</html>