//faktury
const net = document.querySelectorAll('.netto')
const amount = document.querySelectorAll('.amount')
const vatNumber = document.querySelectorAll('.vat-list')
const gross = document.querySelectorAll('.gross')
const netValue = document.querySelectorAll('.net-value')
const grossValue = document.querySelectorAll('.gross-value')
const greenBtn = document.querySelector('.net-button')
const rows = document.querySelectorAll('.row')

const countingFunction = () => {
	for (let i = 0; i < net.length; i++) {
		if (net[i].value !== '' && vatNumber[i].value !== '' && amount[i].value !== '') {
			gross[i].textContent = (net[i].value * vatNumber[i].value).toFixed(2)
			netValue[i].textContent = (net[i].value * amount[i].value).toFixed(2)
			grossValue[i].textContent = (net[i].value * vatNumber[i].value * amount[i].value).toFixed(2)
		}
	}
}
const changeRowColor = () => {
	for (let i = 0; i < rows.length; i++) {
		if (net[i].value > 1000) {
			rows[i].classList.add('green-row')
		} else {
			rows[i].classList.remove('green-row')
		}
	}
}
countingFunction()
window.addEventListener('input', countingFunction)
greenBtn.addEventListener('click', changeRowColor)
