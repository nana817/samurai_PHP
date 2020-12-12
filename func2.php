<?php
    //足し算をする関数
    function add($x, $y){
        $z = $x + $y;
        return $z;
    }
    $result = add(1, 4);
  //  print $result . "\n";
    $result2 = add(3, 10);
    // $result3 = add($result, $result2);
    // print $result3 . "\n";
    print add($result, $result2) . "\n";
    print add(add(1, 4), add(3, 10))
    . "\n";