<?php

namespace App\Controller\Abstracts;

use App\Model\File;
use App\Model\ListOfFiles;

class ListNamesAbstract
{
    public static function getFileName(File $file) : array
    {
        return [];
    }

    protected static function getLosNames(ListOfFiles $los) : array
    {
        return [];
    }
}