var arreglo = []
var uno = parseInt(prompt("Ingrese el primer elemento de la multiplicacion", 0));
var dos = parseInt(prompt("Ingrese el segundo elemento de la multiplicacion", 0));
var resultado = 0;
var i = 0;
var modulo = 0;

while (uno > 0){
	uno = uno - 1;
	resultado = resultado + dos;
	modulo = resultado%2
	if (modulo == 0){
		arreglo[i] = arreglo.push(resultado);
	}
	i=i+1	
}

document.writeln("El resultado de la multiplicacion es: " + resultado + "<br><br>");

document.writeln("Estos son los elementos impares relacionados con la multiplicacion: " + arreglo);