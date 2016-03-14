/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var b = parseInt(prompt('Introduce un valor positivo para la base'));
var n = parseInt(prompt('Introduce el valor positivo para el exponente'));
var p = 1;
while(n > 0)
{
    p = p * b;
    n = n-1;
}
alert('la potencia es:'+p);
