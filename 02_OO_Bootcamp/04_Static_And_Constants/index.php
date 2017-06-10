<?php

class Math
{
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}


//$math = new Math;
//var_dump($math->add(1, 2, 3, 4));

echo Math::add(1, 2, 3, 4);

//No longer reqires an instance.
//We're accessing add method from anywhere.
//essentially turned into global function
//Be careful if the method called other methods.
//not a good idea.
