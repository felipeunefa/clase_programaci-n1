var cedula = prompt("Inserte su numero de cedula",0);
var num = cedula.split("");
var i = 0;
var mayor, menor;

mayor = parseInt(num[0]);
menor = parseInt(num[0]);

if (parseInt(cedula) > 0)
	for (i in num){
		if (mayor < parseInt(num[i]))
			mayor = num[i];
		
		if (menor > parseInt(num[i]))
			menor = num[i];
	}
else
	
	alert("El numero ingresado no es valido");


alert("El numero de cedula ingresado es: " + cedula + "");
alert("El numero mayor en la cedula ingresada es: " + mayor + "");
alert("El numero menor en la cedula ingresada es: " + menor);