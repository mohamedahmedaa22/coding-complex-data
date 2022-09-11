<?php

namespace App\Controller;

use App\Controller\Abstracts\ListNamesAbstract;
use App\Model\File;
use App\Model\ListOfFiles;

class ListNames extends ListNamesAbstract
{
    private static array $names;

    public static function getFileName(File $file): array
    {
        if ($file->getData() > 0) {
            self::$names[] = $file->getName();
            return self::$names;
        } else {
            return self::getLosNames($file->getLos());
        }
    }
    protected static function getLosNames(ListOfFiles $los): array
    {
        if (count($los) === 0 || empty($los)) {
            return self::$names;
        } else {
            self::getFileName($los[0]);
            unset($los[0]);
            return self::getLosNames($los);
        }
    }
}