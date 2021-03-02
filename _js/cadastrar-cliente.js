// Variáveis globais e Listeners
const selectTipo = document.getElementById('tipo');
const labelNumDoc = document.getElementById('labelNumDoc');
const inputNumDoc = document.getElementById('numDoc');

selectTipo.addEventListener('change', atualizarCampo);

// Functions
// Trocar os campos de CPF e CNPJ
function atualizarCampo() {
    if (selectTipo.value == 'pf') {
        labelNumDoc.innerText = "CPF:";
        inputNumDoc.style.width = "165px";
    } else if (selectTipo.value == 'pj') {
        labelNumDoc.innerText = "CNPJ:";
        inputNumDoc.style.width = "155px";
    }
}