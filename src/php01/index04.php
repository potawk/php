<?php
$count = 0;
while ($count <= 100) {
	if ($count == 20) {
		break;
	}
	if ($count % 3 == 0) {
		$i++;
		continue;
	}
	echo $count . '<br />';
	$count++;
}