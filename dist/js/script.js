// mobile menu

var btn = document.querySelector('.header__menu-mobile__btn');
var menu = document.querySelector('.header__menu-mobile__ul');

btn.addEventListener('click', function () {
  menu.classList.toggle('displayOn');
});

// Photo switcher

function switchPhoto(smallImg) {
  var fullImg = document.querySelector('.produkt__left__pic__img');

  fullImg.src = smallImg.src;
}
