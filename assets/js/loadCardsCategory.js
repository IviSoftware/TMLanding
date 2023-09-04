const tecnologyCategoryBtn = document.getElementById('tecnologyCategoryBtn');
const bussinesCategoryBtn = document.getElementById('bussinesCategoryBtn');
const artsCategoryBtn = document.getElementById('artsCategoryBtn');
const scienceCategoryBtn = document.getElementById('scienceCategoryBtn');

const allCategories = Array.from(document.querySelectorAll('.coursesContentCards'));
const tecnologySection = document.getElementById('tecnologySection');
const bussinesSection = document.getElementById('bussinesSection');
const artsSection = document.getElementById('artsSection');
const scienceSection = document.getElementById('scienceSection');

const popUpRoot = document.getElementById('popUpRoot');


//Función para clonar cards
const clonarCard = (id) => {
    const cardOriginal = document.getElementById(id);
    return cardOriginal.cloneNode(true);
};

const renderPopUp = (card) => {
    popUpRoot.innerHTML = '';
    popUpRoot.style.display = 'flex';
    popUpRoot.appendChild(card);
}

//Función para añadir escuchador a las cards
const listenerToCards = (nameOfSection)=>{
    const botonesVerDetalles = document.querySelectorAll('.iconsCardFooter a:nth-child(2)');
    botonesVerDetalles.forEach((boton, index)=> {
        boton.addEventListener('click', (event)=> {
            event.preventDefault();
            const cardClone = clonarCard(`${nameOfSection}-${index}`);
            cardClone.style.transform = 'scale(1.2)'
            renderPopUp(cardClone)
        });
    });
};

//Función que desabilita todas las secciones pero a la que le pasemos por ID, a esa no lo hace
const handleCategoryClick = (sectionId) => {
    allCategories.forEach((category) => {
        category.classList.add('noActive');
    });
    document.getElementById(sectionId).classList.remove('noActive');
}

const categoryBtns = {
    tecnology: document.getElementById('tecnologyCategoryBtn'),
    bussines: document.getElementById('bussinesCategoryBtn'),
    arts: document.getElementById('artsCategoryBtn'),
    science: document.getElementById('scienceCategoryBtn'),
};

for (const key in categoryBtns) {
    categoryBtns[key].addEventListener('click', () => handleCategoryClick(`${key}Section`));
}

listenerToCards('tecCard');

popUpRoot.addEventListener('click',()=>{
    popUpRoot.style.display = 'none';
});