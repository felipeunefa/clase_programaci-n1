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


document.write("El numero de cedula ingresado es: " + cedula + "<br> <br>");
document.write("El numero mayor en la cedula ingresada es: " + mayor + "<br> <br>");
document.write("El numero menor en la cedula ingresada es: " + menor);