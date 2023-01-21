// show current year on login page.
// const getYear = () => new Date().getFullYear()
// const year = document.querySelector('#year')
// year.innerText = getYear()

// menu mobile
const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');

btn.addEventListener('click', () => {
	btn.classList.toggle('open');
	nav.classList.toggle('flex');
	nav.classList.toggle('hidden');
})

// const btnPerfil = document.querySelector('#btn-perfil')
// const perfil = document.querySelector('#perfil')

// btnPerfil.addEventListener('click', () => {
// 	perfil.classList.toggle('flex');
// 	perfil.classList.toggle('hidden');
// })


// document.write(new Date().getFullYear())

// modal confirm delete

// modal register new client
const modalRegister = document.querySelector('#modal-register')

const btnRegister = document.querySelector('#btn-register')
btnRegister.addEventListener('click', () => {
	modalRegister.classList.toggle('hidden')
})

const allBtnClose = document.querySelectorAll('#btn-close')
allBtnClose.forEach( btn => {
	btn.addEventListener('click', () => {
	modalRegister.classList.toggle('hidden')
	})
})

window.addEventListener('click', (e) => {
	if (e.target == modalRegister) {
		modalRegister.classList.toggle('hidden')
	}
})

// modal edit client - user information
