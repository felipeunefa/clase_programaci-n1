
var a=parseInt(prompt("Introduzca el primer numero: ", 0));
var b=parseInt(prompt("Introduzca el segundo numero: ", 0));
var z=0;
var exp=1;			//exponencial
var	contpar=0;		//contador pares
var	contimpar=0;    //contador impares
var a_ini=a;
var par=1;
var impar=0;


while (a>0){


	if (a%2==0) {
		par=par*a;
		contpar=contpar+1;
	}else{
		impar=impar-a;
		contimpar=contimpar+1;
	}
	a=a-1;
	exp=exp*b;
};
alert("el exponencial de "+b+" elevado a "+a_ini+" es: "+exp);
alert("el producto de todos los pares de a ("+a_ini+") por b("+b+") es: "+par*b+" y a tiene "+contpar+" numeros pares");
alert("la diferencia de todos los impares de a ("+a_ini+") menos ("+b+") es: "+(impar-b)+ " y a tiene "+contimpar+ " numeros impares");

