/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
;
var x = parseInt(prompt('ingrese un valor entero para x'));

var y = parseInt(prompt('ingrese un valor entero para y'));

while(x != 0){
if(x >= y)
{
  alert('x = '+x+' es mayor o igual que y = '+y);  
x = 0
y = 0
}else if(x <= y)
{
    alert('x = '+x+ ' es menor o igual que y = '+y);
x = 0
y = 0
}
else
{
    alert('x es igual a cero');
}

}
