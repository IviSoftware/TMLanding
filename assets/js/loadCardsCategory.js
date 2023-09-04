const tecnologyCategoryBtn = document.getElementById('tecnologyCategoryBtn');
const bussinesCategoryBtn = document.getElementById('bussinesCategoryBtn');
const artsCategoryBtn = document.getElementById('artsCategoryBtn');
const scienceCategoryBtn = document.getElementById('scienceCategoryBtn');

const allCategories = Array.from(document.querySelectorAll('.coursesContentCards'));
const tecnologySection = document.getElementById('tecnologySection');
const bussinesSection = document.getElementById('bussinesSection');
const artsSection = document.getElementById('artsSection');
const scienceSection = document.getElementById('scienceSection');


//Función que desabilita todas las secciones pero a la que le pasemos por ID, a esa no lo hace
function handleCategoryClick(sectionId) {
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