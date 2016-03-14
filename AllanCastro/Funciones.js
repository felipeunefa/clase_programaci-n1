var cedula = prompt("Inserte su numero de cedula",0);
var numeros = cedula.split("");
var i,j = 0;
var mayor, menor = 0;

if (cedula <= 0)
	alert("El numero ingresado no es valido");
else
	for (i in numeros)
		for(j in numeros)
			if (parseInt(numeros[i])>parseInt(numeros[j]))
				mayor = numeros[i];
			
			if (parseInt(numeros[i])<parseInt(numeros[j]))
				menor = numeros[i];
		j=j+1;
	i=i+1;

alert("El numero mayor en la cedula ingresada es: " + mayor);
alert("El numero menor en la cedula ingresada es: " + menor);