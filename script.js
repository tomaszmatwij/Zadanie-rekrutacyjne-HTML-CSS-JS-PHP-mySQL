//pracownicy

const oddRow = document.querySelectorAll('.odd-row')
const evenRow = document.querySelectorAll('.even-row')
const oddColor = document.querySelector('.odd-color')
const evenColor = document.querySelector('.even-color')

function changeColorOdd(e) {
	console.log(e.target.value)
	oddRow.forEach(el => {
		el.style.backgroundColor = e.target.value
	})
}
function changeColorEven(e) {
	console.log(e.target.value)
	evenRow.forEach(el => {
		el.style.backgroundColor = e.target.value
	})
}
oddColor.addEventListener('input', changeColorOdd)
evenColor.addEventListener('input', changeColorEven)


