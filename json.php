<pre>
    <?php

    for($i = 0; $i <10; $i++) {
        $br[] = $i*$i; 
    }

    array_push($br, 100, 105);

    echo json_encode($br);

    echo '<br>-------<br>';

    $ar = array(

        'name' => '王大明/棒',
        'age' => '30',
        'gender' => '男生',

    );
    echo json_encode($ar);
    echo '<br>-------<br>';
    echo json_encode($ar, JSON_UNESCAPED_UNICODE);
    echo '<br>-------<br>';
    echo json_encode($ar, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    ?>
</pre>