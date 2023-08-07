const addPanel = document.querySelector('.add-panel')
const addPanelBtn = document.querySelector('.add-button')
const cancelBtn = document.querySelector('.cancel-user')
const inputValue = document.querySelectorAll('.inputform')
const editButton = document.getElementById('.edit')
const updatePanel = document.querySelector('.update-panel')
const table = document.querySelector('table')
const cancelUpdate = document.querySelector('.cancel-update-user')
const deleteBtn = document.querySelector('.delete')
const deletePanel = document.querySelector('.delete-panel')
const cancelDeleteBtn = document.querySelector('.cancel-delete')

const inputNip = document.querySelector('#nip')
const inputRegon = document.querySelector('#regon')
const inputName = document.querySelector('#name')
const inputStreet = document.querySelector('#street')
const inputHomeNumber = document.querySelector('#home-number')
const inputFlatNumber = document.querySelector('#flat-number')
const inputVatPayer = document.querySelector('#vat-payer')
const inputOldNip = document.querySelector('#old-nip')
const inputOldNip2 = document.querySelector('#old-nip2')
const contacterTitle = document.querySelector('.contracter-title')
const deleteContractorTitle = document.querySelector('.delete-contracter-title')

const showPanel = () => {
	addPanel.classList.add('show')
}
function clearForm() {
	for (let i = 0; i < inputValue.length; i++) {
		inputValue[i].value = ''
	}
}
const cancelPanel = () => {
	addPanel.classList.remove('show')
	clearForm()
}
const showEditPanel = () => {
	updatePanel.classList.add('show')
}

const checkClick = e => {
	if (e.target.matches('.edit')) {
		inputFlatNumber.value = e.target.closest('tr').children[6].textContent
		inputNip.value = e.target.closest('tr').children[0].textContent
		inputRegon.value = e.target.closest('tr').children[1].textContent
		inputName.value = e.target.closest('tr').children[2].textContent
		inputStreet.value = e.target.closest('tr').children[4].textContent
		inputHomeNumber.value = e.target.closest('tr').children[5].textContent
		inputFlatNumber.value = e.target.closest('tr').children[6].textContent
		inputOldNip.value = e.target.closest('tr').children[0].textContent
		contacterTitle.textContent = e.target.closest('tr').children[2].textContent
		console.log(inputOldNip)
		console.log(inputOldNip.value)

		if (e.target.closest('tr').children[3].textContent === 'Tak') {
			inputVatPayer.checked = true
		} else {
			inputVatPayer.checked = false
		}

		updatePanel.classList.add('show')
	} else if (e.target.matches('.delete')) {
		// inputOldNip.value = e.target.closest('tr').children[0].textContent
		deletePanel.classList.add('show')
		deleteContractorTitle.textContent = e.target.closest('tr').children[2].textContent
		// console.log(e.target.closest('tr').children[0].textContent)
		inputOldNip2.value = e.target.closest('tr').children[0].textContent
		console.log(inputOldNip.value)
	}
}
const cancelUpdatePanel = () => {
	updatePanel.classList.remove('show')
}
const deletePanelShow = () => {
	deletePanel.classList.add('show')
}
const cancelDelete = () => {
	deletePanel.classList.remove('show')
}

addPanelBtn.addEventListener('click', showPanel)
cancelBtn.addEventListener('click', cancelPanel)
table.addEventListener('click', checkClick)
cancelUpdate.addEventListener('click', cancelUpdatePanel)
cancelDeleteBtn.addEventListener('click', cancelDelete)
// deleteBtn.addEventListener('clicl', deletePanelShow)
for(let i; i.l)