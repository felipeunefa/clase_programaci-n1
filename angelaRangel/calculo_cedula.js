var num_ci=prompt("Introduzca su cedula de identidad: ", 0);
var array=num_ci.split('');
var cant=num_ci.length;

if (isNaN(num_ci)) {
	alert("NO ES UN NUMERO");
}else{
	array.sort();
	alert("El numero menor de la cedula es: "+array[0]+"\n mientras que el mayor es: "+array[cant-1]);
}; 


   

