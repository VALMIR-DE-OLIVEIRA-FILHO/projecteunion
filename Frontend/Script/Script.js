function mudarCor(cor) {
    const body = document.body;

    // Verifica o valor da variável 'tela' e define a cor de acordo
    if (cor === 'cadastro') {
        body.style.backgroundColor = 'pink';
    } else if (cor === 'azul') {
        body.style.backgroundColor = 'blue';
    } else if (cor === 'verde') {
        body.style.backgroundColor = 'green';
    }
}
