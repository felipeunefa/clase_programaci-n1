/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var b = parseInt(prompt('Introduce un valor positivo para la base'));
var n = parseInt(prompt('Introduce el valor positivo para el exponente'));
var p = 1;
var valor = false;
while(n > 0)
{
    p = p * b;
    n = n-1;
if( p % 2 === 0)
{
	valor = true;
}

}
if(valor === true)
{
alert('la potencia es: '+p+' y tambien es Par!');
}else{
alert('la potencia es: '+p+' y tambien es Impar!');
}
