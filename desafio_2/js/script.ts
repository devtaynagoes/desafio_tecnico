function fibonacciValid(n: number): boolean {
    if (n < 0) return false;

    const ehNumeroPerfeito = (x: number) => {
        const raizQuadrada = (x: number) => Math.sqrt(x);
        return raizQuadrada(x) === Math.floor(raizQuadrada(x));
    };

    return ehNumeroPerfeito(5 * n * n + 4) || ehNumeroPerfeito(5 * n * n - 4);
}

function fibonacciVerificar() {
    const input = document.getElementById("inputNumber") as HTMLInputElement;
    const numero = Number(input.value);
    const resultadoDiv = document.getElementById("result");

    if (fibonacciValid(numero)) {
        resultadoDiv!.innerText = `${numero} faz parte da sequência de Fibonacci.`;
    } else {
        resultadoDiv!.innerText = `${numero} NÃO faz parte da sequência de Fibonacci.`;
    }
}
