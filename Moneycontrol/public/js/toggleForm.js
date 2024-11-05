function toggleForm(type) {
    const entradaForm = document.getElementById('formEntrada');
    const saidaForm = document.getElementById('formSaida');
    const btnEntrada = document.getElementById('btnEntrada');
    const btnSaida = document.getElementById('btnSaida');

    if (type === 'entrada') {
        entradaForm.classList.add('active');
        saidaForm.classList.remove('active');
        btnEntrada.classList.add('active');
        btnSaida.classList.remove('active');
    } else {
        saidaForm.classList.add('active');
        entradaForm.classList.remove('active');
        btnSaida.classList.add('active');
        btnEntrada.classList.remove('active');
    }
}
