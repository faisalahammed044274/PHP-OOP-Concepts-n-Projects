<?php
$birthday = new DateTime('26.12.1994');
$recent_Today = new DateTime(date('m.d.y'));
$difference = $recent_Today->diff($birthday);
printf('Your age till date : %d years, %d month, %d days', $difference->y, $difference->m, $difference->d);
printf("\n");
?>