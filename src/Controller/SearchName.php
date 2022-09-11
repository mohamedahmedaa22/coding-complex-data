<?php

namespace App\Controller;

use App\Controller\Abstracts\NameSearchAbstract;
use App\Model\File;
use App\Model\ListOfFiles;
use Exception;

class SearchName extends NameSearchAbstract
{
    public function findElement(string $name, File $file)
    {
        if ($file->getData() > 0) {
            if ($name == $file->getName()) {
                return $file->getData();
            } else {
                throw new Exception("Cannot find this element within that File.");
            }
        } else {
            return $this->findLos($name, $file->getLos());
        }
    }

    protected function findLos(string $name, ListOfFiles $los)
    {
        if (count($los) === 0) {
            throw new Exception("Cannot find this element within that File.");
        } else {
            try {
                $file = $los[0];
                unset($los[0]);
                return $this->findElement($name, $file);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
    }
}
