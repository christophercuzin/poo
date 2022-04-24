<?php

namespace App\Interface;

interface LightableInterface
{
    public function switchOn():bool;
    public function switchOff():bool;
}