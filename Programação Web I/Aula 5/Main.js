let valorAtual = '';
let valorAnterior = '';
let operacaoAtual = null;

function atualizarTela(valor) {
    document.getElementById('tela').textContent = valor;
}

function adicionarNumero(numero) {
    if (valorAtual.includes('.') && numero === '.') return;
    valorAtual = valorAtual.toString() + numero.toString();
    atualizarTela(valorAtual);
}

function limpar() {
    valorAtual = '';
    valorAnterior = '';
    operacaoAtual = null;
    atualizarTela('0');
}

function inverterSinal() {
    valorAtual = valorAtual ? valorAtual * -1 : valorAtual;
    atualizarTela(valorAtual);
}

function percentual() {
    valorAtual = valorAtual ? valorAtual / 100 : valorAtual;
    atualizarTela(valorAtual);
}

function definirOperacao(operacao) {
    if (valorAtual === '') return;
    if (valorAnterior !== '') {
        calcular();
    }
    operacaoAtual = operacao;
    valorAnterior = valorAtual;
    valorAtual = '';
}

function calcular() {
    let resultado;
    const anterior = parseFloat(valorAnterior);
    const atual = parseFloat(valorAtual);

    if (isNaN(anterior) || isNaN(atual)) return;

    switch (operacaoAtual) {
        case '+':
            resultado = anterior + atual;
            break;
        case '-':
            resultado = anterior - atual;
            break;
        case '*':
            resultado = anterior * atual;
            break;
        case '/':
            resultado = anterior / atual;
            break;
        default:
            return;
    }

    valorAtual = resultado;
    operacaoAtual = null;
    valorAnterior = '';
    atualizarTela(valorAtual);
    alterarCorResultado(valorAtual);
}

function alterarCorResultado(valor) {
    const tela = document.getElementById('tela');
    if (valor > 0) {
        tela.style.backgroundColor = "green";
    } else if (valor < 0) {
        tela.style.backgroundColor = "red";
    } else {
        tela.style.backgroundColor = "gray";
    }
}
