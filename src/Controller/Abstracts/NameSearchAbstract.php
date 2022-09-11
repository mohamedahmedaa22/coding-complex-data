<?php

namespace App\Controller\Abstracts;

use App\Model\File;

abstract class NameSearchAbstract
{
    /**
     * @param String $name
     * @return Integer $data
     * @return Excption
     * search the givin tree for an element for a givin name, to get the data for that element, otherwise throw exception
     */
    abstract public function findElement(string $name, File $file);
}
