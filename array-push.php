<pre>
    <?php

    for($i = 0; $i <10; $i++) {
        $br[] = $i*$i; 
    }
    print_r($br);

    array_push($br, 100, 105);

    echo implode(',', $br);

    $str = '1-3-5-7-9';

    $ar = explode('-', $str);
    print_r($ar);
    ?>
</pre>