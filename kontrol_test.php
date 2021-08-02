kontrol_test_php
<?php
$arr = [];
for ($i=0; $i<101; $i++) {
	$arr[] = rand (0,100);
    }
    foreach ($arr as $a)
    if ($a%10 === 0)
        print_r ($a.'A ');
        echo "<br>";
        foreach ($arr as$b)
    if ($b%10 > 0)
        print_r ($b.'B ');

        //==============================================================================
        //su partII sedesiu> valandos. Trecia nezinau is kart kaip daryti reikia, tai tik 1/3.

