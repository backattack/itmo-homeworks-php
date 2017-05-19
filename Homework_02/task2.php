<?

// Доделать задачу про счастливые билетики - вывести процент от общего числа билетов

$i = 0;
$x = 0;

while ($i < 1000000):
	$ticket = str_pad($i, 6, 0, STR_PAD_LEFT);
	$f_half = substr($ticket, 0, 3);
	$s_half = substr($ticket, 3);
	
	$first_sum = $f_half[0] + $f_half[1] + $f_half[2];
	$second_sum = $s_half[0] + $s_half[1] + $s_half[2];
	
	if($first_sum == $second_sum):
		echo "$ticket <br>";
		$x = $x+1;
	endif;

	$i++;

endwhile;

$proc = (($x/1000000)*100)."%";
echo "$proc";
