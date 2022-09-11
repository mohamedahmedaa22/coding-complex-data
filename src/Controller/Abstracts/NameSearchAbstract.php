<?php

namespace App\Controller\Abstracts;

use App\Model\File;
use App\Model\ListOfFiles;

abstract class NameSearchAbstract
{
    /**
     * @param String $name
     * @return Integer $data
     * @throws Excption if name is not found in the tree
     * search the givin tree for an element for a givin name, to get the data for that element, otherwise throw exception
     */
    abstract public function findElement(string $name, File $file);

    /**
     * @param String $name
     * @param ListOfFiles $los
     * @return Interger $data
     * @throws Exception if name is not found in the tree
     *
     * search the givin tree for an element for a givin name, to get the data for that element, otherwise throw exception
     */
    abstract protected function findLos(string $name, ListOfFiles $los);
}
