<?php

class Rete
{
    public function show(bool $num) : bool
    {
        return true;
    }
}
$ind = new Rete();
$var = $ind->show(false);
echo $var;
