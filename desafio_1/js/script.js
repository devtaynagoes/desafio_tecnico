let indice = 13, soma = 0, k = 0;
let iteration = '';

while (k < indice) {
    k = k + 1;
    soma = soma + k;
    iteration += `Iteração ${k}: Resultado da soma na posição ${k}  = ${soma}<br>`;
}

document.getElementById("iterations").innerHTML = iteration;
document.getElementById("result").innerText = "A soma dos números de 1 a 13 é: " + soma;