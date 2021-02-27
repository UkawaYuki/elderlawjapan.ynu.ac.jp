window.addEventListener('DOMContentLoaded', (event) => {
  const burger = document.querySelector('#burger')
  const navi = document.querySelector('.menuList')
  burger.addEventListener('click', function () {
    burger.classList.toggle('open')
    navi.classList.toggle('open')
  })
})
