function adicionarLinhaTotalizadora() {
    const tabela = document.getElementById('tabelaNotas');
    const tfoot = tabela.querySelector('tfoot');
    
    // Remove a linha totalizadora existente, se houver
    tfoot.innerHTML = '';

    // Criar uma nova linha totalizadora
    const linha = document.createElement('tr');
    linha.innerHTML = '<td>Total</td>';

    const notas = tabela.querySelectorAll('tbody tr');
    const numNotas = notas[0].children.length - 1; // Subtraímos 1 para não contar o nome

    let totais = Array(numNotas).fill(0);

    // Calcular o total de cada coluna
    notas.forEach(linhaAluno => {
        for (let i = 1; i <= numNotas; i++) {
            totais[i - 1] += parseFloat(linhaAluno.children[i].textContent);
        }
    });

    // Adicionar totais à linha totalizadora
    totais.forEach(total => {
        const td = document.createElement('td');
        td.textContent = total.toFixed(2);
        linha.appendChild(td);
    });

    // Calcular e adicionar a média
    const media = totais.map(total => (total / notas.length).toFixed(2));
    media.forEach(m => {
        const td = document.createElement('td');
        td.textContent = m;
        linha.appendChild(td);
    });

    tfoot.appendChild(linha);
}

function adicionarColunaTotalizadora() {
    const tabela = document.getElementById('tabelaNotas');
    const tbody = tabela.querySelector('tbody');
    const thead = tabela.querySelector('thead');
    const tfoot = tabela.querySelector('tfoot');
    const numNotas = thead.querySelectorAll('th').length - 1; // Subtraímos 1 para não contar o cabeçalho Nome

    // Adicionar cabeçalho para a nova coluna
    const th = document.createElement('th');
    th.textContent = 'Média';
    thead.querySelector('tr').appendChild(th);

    // Adicionar a nova coluna em cada linha do corpo da tabela
    tbody.querySelectorAll('tr').forEach(linha => {
        const tds = linha.querySelectorAll('td');
        let soma = 0;

        for (let i = 1; i < tds.length; i++) {
            soma += parseFloat(tds[i].textContent);
        }

        const media = soma / numNotas;
        const td = document.createElement('td');
        td.textContent = media.toFixed(2);
        linha.appendChild(td);
    });

    // Adicionar a nova coluna na linha totalizadora se existir
    if (tfoot.children.length > 0) {
        const totalRow = tfoot.querySelector('tr');
        totalRow.appendChild(document.createElement('td'));
    }
}
