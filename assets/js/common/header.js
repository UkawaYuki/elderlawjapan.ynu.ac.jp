window.addEventListener('DOMContentLoaded', (event) => {
  const burger = document.querySelector('#burger')
  const navi = document.querySelector('.menuList')
  const block = document.querySelector('header .bottomBlock')
  burger.addEventListener('click', function () {
    burger.classList.toggle('open')
    navi.classList.toggle('open')
    block.classList.toggle('open')
  })
})
