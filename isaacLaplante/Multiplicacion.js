var numero_1 = parseInt(prompt("Ingrese el primer numero a multiplicar", 0));
var numero_2 = parseInt(prompt("Ingrese el segundo numero a multiplicar", 0));
var total = 0;
var numero_1_ini=numero_1;
var p=1;
var par=0;

while (numero_1 < 0){
	
	if(numero_1 % 2==0)
		p=p*numero_1;
		par=par+1;
		
		}
		
(total = numero_1 * numero_2);


alert("El total de la multiplicacion de "+numero_1+ " por "+numero_2+ " es: " +total);
alert("El numero pares son: " +p%2);