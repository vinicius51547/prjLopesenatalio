/*=============== NAVBAR FIXA ===============*/
document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  window.addEventListener("scroll", function () {
    const header = document.querySelector('.header');

    if (window.scrollY > 50) {
      header.classList.add('fixed-menu');
    } else {
      header.classList.remove('fixed-menu');
    }
  });

});

/*=============== MOSTRAR MENU ===============*/
const mostrarMenu = (toggleId, navId, overlayId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    overlay = document.getElementById(overlayId);

  // Função para fechar o menu
  const fecharMenu = () => {
    nav.classList.remove('show-menu');
    toggle.classList.remove('show-icon');
    overlay.style.display = 'none';
  };

  toggle.addEventListener('click', () => {
    nav.classList.toggle('show-menu');
    toggle.classList.toggle('show-icon');
    overlay.style.display = nav.classList.contains('show-menu') ? 'block' : 'none';
  });

  // Adicionar evento de clique ao overlay para fechar o menu
  overlay.addEventListener('click', fecharMenu);
};

mostrarMenu('nav-toggle', 'nav-menu', 'overlay-menu');



/*=============== DROPDOWN MENU MOBILE ===============*/

const openMenu = document.getElementById("dropdown-menu");
const openDropdown = document.querySelector(".dropdown-menu");
const navLinks = document.querySelectorAll(".link_disable");
const closeDropdownButton = document.getElementById("closeDropdownButton");

let isDropdownOpen = false;

openMenu.addEventListener("click", () => {
  // Verifica se a largura da tela é menor ou igual a 1118 pixels
  if (window.matchMedia('(max-width: 920px)').matches) {
    isDropdownOpen = !isDropdownOpen; // Inverte o estado do dropdown
    updateDropdownState();
  }
});

closeDropdownButton.addEventListener("click", () => {
  isDropdownOpen = false; // Fecha o dropdown
  updateDropdownState();
});

// Adicione um event listener para fechar o dropdown quando clicar fora dele
document.addEventListener("click", (event) => {
  if (isDropdownOpen && !openMenu.contains(event.target) && !openDropdown.contains(event.target)) {
    isDropdownOpen = false;
    updateDropdownState();
  }
});

// Adiciona um event listener para verificar as alterações de tamanho de tela
window.addEventListener("resize", () => {
  if (!window.matchMedia('(max-width: 920px)').matches && isDropdownOpen) {
    // Se a tela for redimensionada para mais de 1118 pixels e o dropdown estiver aberto, fecha o dropdown
    isDropdownOpen = false;
    updateDropdownState();
  }
});

function updateDropdownState() {
  openMenu.classList.toggle("active", isDropdownOpen);
  openDropdown.classList.toggle("active", isDropdownOpen);

  // Itera sobre cada elemento da NodeList e aplica a alteração de classe
  navLinks.forEach(navLink => {
    navLink.classList.toggle("disable", isDropdownOpen);
  });
}

