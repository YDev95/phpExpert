<?php

declare (strict_types=1);


function sum(int $a = null,int $b = null) :int {

    return $a + $b;

}

echo sum(5,20);