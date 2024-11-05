@extends('layouts.layout')

@section('title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="container d-flex flex-column align-items-center mt-4">
    <div class="menu mb-4 mt-5">
        <button id="btnEntrada" class="btn btn-primary me-2 active" style="width:10em;" onclick="toggleForm('entrada')">Entrada</button>
        <button id="btnSaida" class="btn btn-secondary" style="width:10em;" onclick="toggleForm('saida')">Saída</button>
    </div>

    <div id="formEntrada" class="form-section text-center mb-2" style="width:25em; display: block;"> <!-- Alterado para 'block' -->
        <h2>Entrada de Dinheiro</h2>
        <div class="mb-3">
            <label for="tipoEntrada" class="form-label mt-4">Tipo de Entrada</label>
            <select id="tipoEntrada" class="form-select" onchange="toggleOtherInput('entrada')">
                <option value="" disabled selected>Selecione o tipo</option>
                <option value="salario">Salário</option>
                <option value="mesada">Mesada</option>
                <option value="venda">Venda</option>
                <option value="investimentoentrada">Investimento</option>
                <option value="outro">Outro</option>
            </select>

            <div class="mb-3 mt-3" id="outrosEntrada" style="display: none;">
                <label for="outrosentrada" class="form-label">Outros tipos de entrada</label>
                <input type="text" id="outrosentrada" class="form-control" placeholder="Digite o motivo da entrada">
            </div>
        </div>
        <div class="mb-3">
            <label for="valorEntrada" class="form-label">Valor</label>
            <input type="text" id="valorEntrada" class="form-control" placeholder="Digite o valor" oninput="formatCurrency(this)">
        </div>
        <div class="mb-3">
            <label for="descricaoEntrada" class="form-label">Descrição</label>
            <textarea id="descricaoEntrada" class="form-control" placeholder="Descrição da entrada"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar Entrada</button>
    </div>

    <div id="formSaida" class="form-section text-center" style="width:25em; display: none;">
        <h2>Saída de Dinheiro</h2>
        <label for="tipoSaida" class="form-label mt-4">Tipo de Saída</label>
        <select id="tipoSaida" class="form-select mb-2" onchange="toggleOtherInput('saida')">
            <option value="" disabled selected>Selecione o tipo</option>
            <option value="pagfatura">Pagamento de fatura</option>
            <option value="compra">Compras</option>
            <option value="investimentosaida">Investimento</option>
            <option value="outros2">Outro</option>
        </select>

        <div class="mb-3 mt-3" id="outrosSaida" style="display: none;">
            <label for="outrossaida" class="form-label">Outros tipos de saída</label>
            <input type="text" id="outrossaida" class="form-control" placeholder="Digite o motivo da saída">
        </div>

        <div class="mb-3">
            <label for="valorSaida" class="form-label">Valor</label>
            <input type="text" id="valorSaida" class="form-control" placeholder="Digite o valor" oninput="formatCurrency(this)">
        </div>
        <div class="mb-3">
            <label for="descricaoSaida" class="form-label">Descrição</label>
            <textarea id="descricaoSaida" class="form-control" placeholder="Descrição da saída"></textarea>
        </div>
        <button type="submit" class="btn btn-danger">Salvar Saída</button>
    </div>
</div>

<script>
function toggleForm(formType) {
        document.getElementById('formEntrada').style.display = 'none';
        document.getElementById('formSaida').style.display = 'none';

        document.getElementById('btnEntrada').classList.remove('active');
        document.getElementById('btnSaida').classList.remove('active');

        if (formType === 'entrada') {
            document.getElementById('formEntrada').style.display = 'block';
            document.getElementById('btnEntrada').classList.add('active');
        } else {
            document.getElementById('formSaida').style.display = 'block';
            document.getElementById('btnSaida').classList.add('active');
        }
    }

    function toggleOtherInput(formType) {
        const tipoEntrada = document.getElementById('tipoEntrada');
        const outrosEntrada = document.getElementById('outrosEntrada');
        const tipoSaida = document.getElementById('tipoSaida');
        const outrosSaida = document.getElementById('outrosSaida');

        if (formType === 'entrada') {
            // Mostrar/ocultar campo para outros tipos de entrada
            outrosEntrada.style.display = tipoEntrada.value === 'outro' ? 'block' : 'none';
        } else if (formType === 'saida') {
            // Mostrar/ocultar campo para outros tipos de saída
            outrosSaida.style.display = tipoSaida.value === 'outros2' ? 'block' : 'none';
        }
    }

    function formatCurrency(input) {
        // Remove caracteres não numéricos
        let value = input.value.replace(/\D/g, '');
        
        // Converte o valor para um número e formata como moeda
        if (value) {
            value = (parseFloat(value) / 100).toFixed(2).replace('.', ','); // Divide por 100 e formata
            input.value = `R$ ${value}`;
        } else {
            input.value = ''; // Limpa o campo se não houver valor
        }
    }
</script>

@section('scripts')
    <script src="{{ asset('js/toggleForm.js') }}"></script>
@endsection
@endsection
