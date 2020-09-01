let menuToggle = document.getElementById('menu-toggle'),
    menu = document.getElementById('menu');

menuToggle.addEventListener('click', event => {
  menu.classList.toggle('hidden');
});
menu.addEventListener('click', event => {
  menu.classList.toggle('hidden');
});
