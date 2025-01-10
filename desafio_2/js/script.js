function fibonacciValid(n) {
    if (n < 0)
        return false;
    var ehNumeroPerfeito = function (x) {
        var raizQuadrada = function (x) { return Math.sqrt(x); };
        return raizQuadrada(x) === Math.floor(raizQuadrada(x));
    };
    return ehNumeroPerfeito(5 * n * n + 4) || ehNumeroPerfeito(5 * n * n - 4);
}
function fibonacciVerificar() {
    var input = document.getElementById("inputNumber");
    var numero = Number(input.value);
    var resultadoDiv = document.getElementById("result");
    if (fibonacciValid(numero)) {
        resultadoDiv.innerText = "".concat(numero, " faz parte da sequ\u00EAncia de Fibonacci.");
    }
    else {
        resultadoDiv.innerText = "".concat(numero, " N\u00C3O faz parte da sequ\u00EAncia de Fibonacci.");
    }
}
