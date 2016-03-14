var cedula = prompt("Inserte su numero de cedula",0);
var numeros = cedula.split("");
var i = 0;
var mayor, menor;

mayor = parseInt(numeros[0]);
menor = parseInt(numeros[0]);

if (parseInt(cedula) > 0)
	for (i in numeros){
		if (mayor < parseInt(numeros[i]))
			mayor = numeros[i];
		
		if (menor > parseInt(numeros[i]))
			menor = numeros[i];
	}
else
	
	alert("El numero ingresado no es valido");

	
alert("El numero mayor en la cedula ingresada es: " + mayor);
alert("El numero menor en la cedula ingresada es: " + menor);