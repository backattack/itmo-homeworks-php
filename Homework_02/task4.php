<?

// Вывести все положительые числа, меньше 40,
// у которых есть хотя бы одна цифра 3 и которые не делятся на 5

$x = 0;

while ($x < 40):
  
  if(($x > 0)&(($x%5)>0)&((strpbrk($x, '3'))>0)): echo " $x ";
  endif;

$x++;

endwhile;