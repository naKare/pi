function calculateTotal() {
	// Obtiene los checkboxes seleccionados
	const planCheckbox = document.getElementsByName('plan');
	const extraCheckbox = document.getElementsByName('extra');

	// Calcula el precio base
	let basePrice = 0;
	for (let i = 0; i < planCheckbox.length; i++) {
		if (planCheckbox[i].checked) {
			basePrice += parseInt(planCheckbox[i].value);
		}
	}

	// Calcula el precio de los extras seleccionados
	let extraPrice = 0;
	for (let i = 0; i < extraCheckbox.length; i++) {
		if (extraCheckbox[i].checked) {
			extraPrice += parseInt(extraCheckbox[i].value);
		}
	}

	// Calcula el total
	const total = basePrice + extraPrice;

	// Muestra el total en la página
	const totalElement = document.getElementById('total');
	totalElement.textContent = `Total: $${total}/mo`;
}