var c = prompt("Inserte el numero de cedula",0);
var n = c.split("");
var b = 0;
var mayor_numero;
var menor_numero;


mayor_numero = parseInt(n[0]); 
menor_numero = parseInt(n[0]); 

if (parseInt(c) > 0){
	for (b in n){
		if (mayor_numero < parseInt(n[b]))
			mayor_numero = n[b];
		
		if (menor_numero > parseInt(n[b]))
			menor_numero = n[b];
			}}	
			
	alert("El numero de cedula es: " +c);
	alert("El numero mayor  es: " +mayor_numero);
	alert("El numero menor es: " +menor_numero);

