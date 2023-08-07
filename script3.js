const rows = document.querySelectorAll('tr')

const addClass = () => {
	for (let i = 0; i < rows.length; i++) {
		if (i % 2 === 0) {
			rows[i].classList.add('even-row')
		} else {
			rows[i].classList.add('odd-row')
		}
	}
}
addClass()
