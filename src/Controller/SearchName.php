<?php

namespace App\Controller;

use App\Controller\Abstracts\NameSearchAbstract;
use App\Model\File;
use Exception;

class SearchName extends NameSearchAbstract
{
    public function findElement(string $name, File $file)
    {
        if ($file->getData() > 0) {
            if ($name == $file->getName()) {
                return $file->getName();
            }  else {
                throw new Exception("Cannot find this element within that File.");
            }
        }
    }
}
