$(document).ready(function() {
    $.getJSON('./dados.json', function(dados) {
        const valoresFaturamento = dados.filter(dado => dado.valor > 0).map(dado => dado.valor);

        if (valoresFaturamento.length === 0) {
            $('#menor, #maior, #diasAcimaMedia').text('Não há faturamento válido.');
            return;
        }

        const menor = Math.min(...valoresFaturamento);
        const maior = Math.max(...valoresFaturamento);

        const media = valoresFaturamento.reduce((soma, valor) => soma + valor, 0) / valoresFaturamento.length;

        const diasAcimaDaMedia = dados.filter(dado => dado.valor > media).length;

        const formatarValor = valor => `R$ ${valor.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

        $('#menor').text(formatarValor(menor));
        $('#maior').text(formatarValor(maior));
        $('#diasAcimaMedia').text(diasAcimaDaMedia);
    });
});