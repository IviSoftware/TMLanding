<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Midas</title>
    <link rel="stylesheet" href="../assets/css/trainingMidasGlobalStyles.css?v4.0">
    <link rel="stylesheet" href="../assets/css/galleryCoursesStyles.css?v13.0">
    <script src="https://kit.fontawesome.com/7663d03649.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/menuDesktopStyles.css?v1.0">
    <style>
    @media screen and (min-width: 1024px){
            body {
                padding-top: 96px;
            }
    }
    </style>
</head>

<body>

    <?php require '../layouts/navBar.php'  ?>
    <aside class="categoryMenu">
        <img src="../assets/images/logo_TM.png" alt="Logo de training midas" class="logoCategoryMenu">
        <nav class="categoriesNavbar">
            <ul>
                <li class="categoriesTitle"><b>CATEGORIAS</b></li>
                <li class="categoriesBtnMenu" id="tecnologyCategoryBtn">TECNOLOGÍA</li>
                <li class="categoriesBtnMenu" id="bussinesCategoryBtn">NEGOCIOS</li>
                <li class="categoriesBtnMenu" id="artsCategoryBtn">ARTES</li>
                <li class="categoriesBtnMenu" id="scienceCategoryBtn">CIENCIAS</li>
            </ul>
        </nav>

        <div class="logosMenuSection">
            <a href="#"><i class="fa-brands fa-facebook-f" style="color: #1e1d28;"></i></a>
            <a href="#"><i class="fa-brands fa-tiktok" style="color: #1d1e28;"></i></a>
            <a href="#"><i class="fa-brands fa-youtube" style="color: #1e1d28;"></i></a>
            <a href="#"><i class="fa-brands fa-instagram" style="color: #1e1d28;"></i></a>
        </div>
    </aside>

    <header class="headerGallerCourses">
        <div>
            <h1><span>EXPLORA</span> NUESTROS CURSOS</h1>
            <div class="searchBarContainer desktopSearchBar">
                <i class="fa-solid fa-magnifying-glass" style="color: #0e0e09;" id="searchBarIcon"></i>
                <input type="text" id="searchBarTop">
            </div>
        </div>
        <div class="textHeader">
            <p class="descriptionHeader">
                <b>Breve descripción.</b>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Modi natus doloremque ea repudiandae voluptatum ex est dolor, quas temporibus impedit delectus 
                tenetur fuga et laudantium, quos tempore. Similique, repellat et?
            </p>
            <div class="searchBarContainer">
                <i class="fa-solid fa-magnifying-glass" style="color: #0e0e09;" id="searchBarIcon"></i>
                <input type="text" id="searchBarTop">
            </div>
        </div>
    </header>

    <section class="coursesContentCards"  id="tecnologySection">
        <?php for($i = 0;$i <= 10;$i++): ?>
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

    <section class="coursesContentCards noActive"  id="bussinesSection">
        <?php for($i = 0;$i <= 10;$i++): ?>
            <div class="card" id="bussinesCard-<?= $i ?>">
            <img class="courseImg" src="../assets/images/sampleVideoCourse.png" alt="imagen del curso">
            <h3>NOMBRE DEL CURSO negocio</h3>
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

    <section class="coursesContentCards noActive"  id="artsSection">
        <?php for($i = 0;$i <= 10;$i++): ?>
            <div class="card" id="artsCard-<?= $i ?>">
            <img class="courseImg" src="../assets/images/sampleVideoCourse.png" alt="imagen del curso">
            <h3>NOMBRE DEL CURSO artes</h3>
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

    <section class="coursesContentCards noActive"  id="scienceSection">
        <?php for($i = 0;$i <= 10;$i++): ?>
            <div class="card" id="scienceCard-<?= $i ?>">
            <img class="courseImg" src="../assets/images/sampleVideoCourse.png" alt="imagen del curso">
            <h3>NOMBRE DEL CURSO ciencias</h3>
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

    <div id="popUpRoot"></div>

    <script src="../assets/js/loadCardsCategory.js?v5.0"></script>
</body>
</html>