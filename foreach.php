<pre>
    <?php

    for($i = 0; $i <10; $i++) {
        $br[] = $i*$i; 
    }

    array_push($br, 100, 105);

    foreach($br as $v){
        echo "$v <br>";
    }
    echo '-------<br>';

    $ar = array(

        'name' => 'billy',
        'age' => '30',
        'gender' => 'male',

    );
    foreach($ar as $k =>$v){
        echo " $k => $v <br>";
    }
    echo '-------<br>';

    echo count($ar);
    ?>
</pre>